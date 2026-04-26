<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vokomoon — Database Install</title>
<style>
  body { font-family: 'Segoe UI', sans-serif; background: #0D3B2E; color: white; min-height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; }
  .box { background: #1A5C47; border-radius: 16px; padding: 36px 40px; max-width: 600px; width: 90%; box-shadow: 0 20px 60px rgba(0,0,0,0.4); }
  h1 { font-size: 26px; margin-bottom: 6px; }
  h1 span { color: #22C97B; }
  .sub { color: #a8d4bc; font-size: 14px; margin-bottom: 28px; }
  .step { background: rgba(34,201,123,0.1); border: 1px solid rgba(34,201,123,0.25); border-radius: 10px; padding: 14px 18px; margin-bottom: 12px; font-size: 14px; }
  .step.ok { border-color: #22C97B; }
  .step.err { border-color: #FF6B5B; background: rgba(255,107,91,0.1); }
  .icon { font-size: 18px; margin-right: 8px; }
  .btn { display: inline-block; margin-top: 20px; padding: 12px 28px; background: linear-gradient(135deg, #22C97B, #1A5C47); color: white; border-radius: 40px; text-decoration: none; font-weight: 700; font-size: 15px; }
  .warn { background: rgba(245,200,66,0.15); border: 1px solid rgba(245,200,66,0.4); border-radius: 10px; padding: 14px 18px; margin-top: 18px; font-size: 13px; color: #F5C842; }
</style>
</head>
<body>
<div class="box">
  <h1>🛡️ Voko<span>moon</span></h1>
  <div class="sub">Database Installation Script</div>

<?php
require_once 'config.php';

// Security: only allow if not already installed OR if ?reinstall=1
$forceReinstall = isset($_GET['reinstall']) && $_GET['reinstall'] === '1';

$steps = [];
$allOk = true;

// Step 1: Connect
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) throw new Exception($conn->connect_error);
    $conn->set_charset('utf8mb4');
    $steps[] = ['ok', '✅ Database se connection kamyab'];
} catch (Exception $e) {
    $steps[] = ['err', '❌ Database connection fail: ' . $e->getMessage()];
    $allOk = false;
}

// Step 2: Create table if connected
if ($allOk) {
    $sql = "CREATE TABLE IF NOT EXISTS `vokomoon_data` (
        `id` INT NOT NULL DEFAULT 1,
        `data` LONGTEXT NOT NULL,
        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

    if ($conn->query($sql)) {
        $steps[] = ['ok', '✅ Table `vokomoon_data` ready'];
    } else {
        $steps[] = ['err', '❌ Table create nahi hui: ' . $conn->error];
        $allOk = false;
    }
}

// Step 3: Insert default row if empty
if ($allOk) {
    $check = $conn->query("SELECT id FROM vokomoon_data WHERE id = 1");
    if ($check->num_rows === 0) {
        // Default DB with categories
        $defaultDB = [
            'mcqs' => [], 'articles' => [], 'pdfs' => [], 'videos' => [],
            'notes' => [], 'questions' => [], 'users' => [], 'sets' => [], 'savedItems' => [],
            'cats' => [
                ['id'=>'english',    'name'=>'English',          'icon'=>'📗', 'color'=>'#e8f5ee', 'show'=>true, 'mcqs'=>0],
                ['id'=>'maths',      'name'=>'Mathematics',      'icon'=>'🔢', 'color'=>'#fff3e0', 'show'=>true, 'mcqs'=>0],
                ['id'=>'science',    'name'=>'General Science',  'icon'=>'🔬', 'color'=>'#e3f2fd', 'show'=>true, 'mcqs'=>0],
                ['id'=>'computer',   'name'=>'Computer Science', 'icon'=>'💻', 'color'=>'#f3e5f5', 'show'=>true, 'mcqs'=>0],
                ['id'=>'gk',         'name'=>'General Knowledge','icon'=>'🌍', 'color'=>'#fce4ec', 'show'=>true, 'mcqs'=>0],
                ['id'=>'pakstudies', 'name'=>'Pakistan Studies', 'icon'=>'📜', 'color'=>'#e8f5e9', 'show'=>true, 'mcqs'=>0],
                ['id'=>'chemistry',  'name'=>'Chemistry',        'icon'=>'⚗️', 'color'=>'#fff8e1', 'show'=>true, 'mcqs'=>0],
                ['id'=>'biology',    'name'=>'Biology',          'icon'=>'🧬', 'color'=>'#e0f7fa', 'show'=>true, 'mcqs'=>0],
                ['id'=>'islamic',    'name'=>'Islamic Studies',  'icon'=>'☪️', 'color'=>'#fbe9e7', 'show'=>true, 'mcqs'=>0],
                ['id'=>'current',    'name'=>'Current Affairs',  'icon'=>'📰', 'color'=>'#ede7f6', 'show'=>true, 'mcqs'=>0]
            ],
            'subcats' => [
                ['id'=>'tenses',  'parent'=>'english',  'name'=>'Tenses',          'mcqs'=>0],
                ['id'=>'grammar', 'parent'=>'english',  'name'=>'Grammar',         'mcqs'=>0],
                ['id'=>'vocab',   'parent'=>'english',  'name'=>'Vocabulary',      'mcqs'=>0],
                ['id'=>'arith',   'parent'=>'maths',    'name'=>'Arithmetic',      'mcqs'=>0],
                ['id'=>'algebra', 'parent'=>'maths',    'name'=>'Algebra',         'mcqs'=>0],
                ['id'=>'physics', 'parent'=>'science',  'name'=>'Physics',         'mcqs'=>0],
                ['id'=>'basics',  'parent'=>'computer', 'name'=>'Computer Basics', 'mcqs'=>0],
                ['id'=>'world',   'parent'=>'gk',       'name'=>'World Geography', 'mcqs'=>0]
            ],
            'subsubcats' => [],
            'sampleMcqs' => [],
            'sampleArticles' => []
        ];
        
        $json = $conn->real_escape_string(json_encode($defaultDB, JSON_UNESCAPED_UNICODE));
        if ($conn->query("INSERT INTO vokomoon_data (id, data) VALUES (1, '$json')")) {
            $steps[] = ['ok', '✅ Default data insert ho gaya (10 categories ke saath)'];
        } else {
            $steps[] = ['err', '❌ Default data insert fail: ' . $conn->error];
            $allOk = false;
        }
    } else {
        if ($forceReinstall) {
            $steps[] = ['ok', '✅ Existing data milti hai (reinstall skip — data safe)'];
        } else {
            $steps[] = ['ok', '✅ Database already setup hai — data safe hai'];
        }
    }
}

// Step 4: Settings table
if ($allOk) {
    $sql2 = "CREATE TABLE IF NOT EXISTS `vokomoon_sessions` (
        `session_id` VARCHAR(64) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `expires_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`session_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    if ($conn->query($sql2)) {
        $steps[] = ['ok', '✅ Sessions table ready'];
    } else {
        $steps[] = ['err', '⚠️ Sessions table: ' . $conn->error];
    }
}

// Print steps
foreach ($steps as $s) {
    echo '<div class="step ' . $s[0] . '"><span class="icon">' . substr($s[1], 0, 2) . '</span>' . htmlspecialchars(substr($s[1], 2)) . '</div>';
}
?>

<?php if ($allOk): ?>
  <div class="step ok" style="margin-top: 18px; font-weight: 700; font-size: 15px;">
    🎉 Installation kamyab! Vokomoon ready hai!
  </div>
  <a href="index.php" class="btn">🚀 Website Kholein →</a>
  <div class="warn">
    ⚠️ <b>Security:</b> install.php ko rename ya delete karein Hostinger File Manager se!<br>
    Rename to: <code>install_done.php</code> or delete it.
  </div>
<?php else: ?>
  <div class="step err" style="margin-top: 18px; font-weight: 700;">
    ❌ Installation fail! config.php mein DB details check karein.
  </div>
  <div class="warn">
    <b>Kya karna hai:</b><br>
    1. Hostinger hPanel → MySQL Databases<br>
    2. New database banao<br>
    3. config.php mein DB_USER, DB_PASS, DB_NAME fill karo<br>
    4. Yeh page refresh karo
  </div>
<?php endif; ?>

</div>
</body>
</html>
