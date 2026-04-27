<?php
// Vokomoon — PHP+MySQL Version
// Hostinger par: config.php mein DB details fill karein, phir install.php chalao
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Vokomoon – Pakistan's #1 vokomoon Platform</title>
<link rel="shortcut icon" href="Vokomoon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=DM+Sans:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
:root{
  --forest:#0D3B2E;--forest2:#1A5C47;--em:#22C97B;--emlt:#4EDDA0;
  --gold:#F5C842;--coral:#FF6B5B;--bg:#F0F6F2;--bg2:#E4EFE8;
  --white:#fff;--text:#0D1F18;--text2:#2D5C45;--text3:#6B9B82;
  --border:#C4D9CC;--r:14px;--r2:8px;
  --sh:0 2px 16px rgba(13,59,46,.08);
  --sh2:0 8px 40px rgba(13,59,46,.15);
  --sh3:0 20px 60px rgba(13,59,46,.22);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:"DM Sans",sans-serif;background:var(--bg);color:var(--text);line-height:1.6;overflow-x:hidden}
.page{display:none}.page.active{display:block}
.hidden{display:none!important}
.container{max-width:1280px;margin:0 auto;padding:0 24px}

/* TOPBAR */
.topbar{background:var(--forest);padding:7px 24px;display:flex;justify-content:space-between;align-items:center;font-size:12px;color:#a8d4bc}
.topbar a{color:var(--emlt);text-decoration:none;margin-left:14px;transition:.2s}
.topbar a:hover{opacity:.8}

/* HEADER */
header{background:var(--white);box-shadow:var(--sh);position:sticky;top:0;z-index:900}
.header-inner{max-width:1280px;margin:0 auto;padding:0 24px;height:68px;display:flex;align-items:center;gap:14px;position:relative;}
.logo{display:flex;align-items:center;gap:11px;cursor:pointer;flex-shrink:0;text-decoration:none}
.logo-icon{width:44px;height:44px;background:linear-gradient(135deg,var(--forest),var(--em));border-radius:12px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(34,201,123,.3)}
.logo-icon svg{width:24px;height:24px}
.logo-name{font-family:"Playfair Display",serif;font-size:22px;font-weight:900;color:var(--forest);line-height:1.2}
.logo-name span{color:var(--em)}
.logo-sub{font-size:10px;color:var(--text3);font-weight:600;letter-spacing:1.5px;text-transform:uppercase}
.h-search{flex:1;max-width:400px;display:flex;align-items:center;background:var(--bg);border:1.5px solid var(--border);border-radius:40px;padding:0 16px;height:42px;gap:8px;transition:.2s}
.h-search:focus-within{border-color:var(--em);background:var(--white)}
.h-search input{border:none;background:transparent;flex:1;font-family:"DM Sans",sans-serif;font-size:14px;outline:none;color:var(--text)}
.h-search input::placeholder{color:var(--text3)}
.h-actions{display:flex;align-items:center;gap:8px;margin-left:auto}
.btn-admin{display:flex;align-items:center;gap:7px;padding:9px 18px;background:linear-gradient(135deg,#0f1923,#1a2740);color:#4EDDA0;border:1.5px solid #243350;border-radius:40px;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:700;cursor:pointer;transition:.2s;white-space:nowrap}
.btn-admin:hover{border-color:var(--em);box-shadow:0 4px 16px rgba(34,201,123,.25)}
.btn-admin .dot{width:7px;height:7px;background:var(--em);border-radius:50%;animation:blink 2s ease-in-out infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.btn-login{padding:9px 20px;border:2px solid var(--forest);background:transparent;color:var(--forest);border-radius:40px;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:700;cursor:pointer;transition:.2s}
.btn-login:hover{background:var(--forest);color:white}
.btn-reg{padding:9px 20px;border:none;background:linear-gradient(135deg,var(--em),var(--forest2));color:white;border-radius:40px;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:700;cursor:pointer;transition:.2s}
.btn-reg:hover{opacity:.9;transform:translateY(-1px)}
.user-chip{display:flex;align-items:center;gap:8px}
.user-av{width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--em),var(--forest2));color:white;font-size:14px;font-weight:700;display:flex;align-items:center;justify-content:center}
.btn-logout{padding:7px 14px;border:1.5px solid var(--border);background:transparent;color:var(--text2);border-radius:40px;font-family:"DM Sans",sans-serif;font-size:12px;font-weight:600;cursor:pointer}

/* NAV */
nav{background:var(--forest);border-bottom:3px solid var(--em)}
.nav-inner{max-width:100%;padding:0 24px;display:flex;align-items:center;flex-wrap:nowrap;gap:0;overflow-x:auto;}
.nav-btn{color:#c8e8d8;font-size:13px;font-weight:500;padding:12px 14px;display:flex;align-items:center;gap:5px;white-space:nowrap;border-bottom:3px solid transparent;margin-bottom:-3px;cursor:pointer;transition:.2s;background:none;border-left:none;border-right:none;border-top:none;font-family:"DM Sans",sans-serif}
.nav-btn:hover{color:var(--emlt);border-bottom-color:var(--gold)}
.nav-btn.active{color:var(--gold);border-bottom-color:var(--gold);font-weight:700}

/* HERO */
.hero{background:linear-gradient(135deg,var(--forest) 0%,var(--forest2) 55%,#1a7a55 100%);padding:56px 24px 48px;position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(34,201,123,.12) 0%,transparent 70%);right:-150px;top:-150px;pointer-events:none}
.hero-inner{max-width:1280px;margin:0 auto;display:flex;align-items:center;gap:48px;position:relative;z-index:1}
.hero-text{flex:1}
.hero-badge{display:inline-flex;align-items:center;gap:6px;background:rgba(34,201,123,.18);border:1px solid rgba(34,201,123,.35);color:var(--emlt);font-size:11px;font-weight:700;letter-spacing:1.8px;text-transform:uppercase;padding:5px 14px;border-radius:40px;margin-bottom:18px}
.hero h1{font-family:"Playfair Display",serif;font-size:clamp(32px,4.5vw,56px);color:white;line-height:1.08;margin-bottom:16px;font-weight:900}
.hero h1 span{color:var(--gold)}
.hero p{color:#a8d4bc;font-size:15.5px;line-height:1.75;max-width:500px;margin-bottom:28px}
.hero-stats{display:flex;gap:32px;flex-wrap:wrap}
.stat-num{font-family:"Space Mono",monospace;font-size:28px;font-weight:700;color:var(--gold);display:block}
.stat-lbl{font-size:12px;color:#a8d4bc;font-weight:500}
.hero-card{flex-shrink:0;width:320px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.14);border-radius:20px;padding:22px;backdrop-filter:blur(12px)}
.hero-card h4{color:var(--emlt);font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:13px}
.hq{color:white;font-size:13.5px;line-height:1.6;margin-bottom:13px}
.hopts{display:flex;flex-direction:column;gap:7px}
.hopt{display:flex;align-items:center;gap:9px;padding:9px 13px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;color:#c8e8d8;font-size:13px;cursor:pointer;transition:.2s}
.hopt:hover,.hopt.correct{background:rgba(34,201,123,.25);border-color:var(--em);color:white}
.hopt-c{width:22px;height:22px;border:2px solid rgba(255,255,255,.25);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0}
.hopt.correct .hopt-c{background:var(--em);border-color:var(--em)}

/* SECTION */
.sec-title{font-family:"Playfair Display",serif;font-size:24px;font-weight:800;color:var(--forest);margin-bottom:4px;position:relative}
.sec-title::after{content:"";display:block;width:44px;height:4px;background:linear-gradient(90deg,var(--em),var(--gold));border-radius:4px;margin-top:6px}
.sec-row{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:20px;flex-wrap:wrap;gap:10px}
.view-all{font-size:13px;font-weight:700;color:var(--em);cursor:pointer;transition:.2s}
.view-all:hover{text-decoration:underline}

/* CATEGORY CARDS */
.cat-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:14px}
.cat-card{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);padding:20px 16px;display:flex;flex-direction:column;align-items:flex-start;gap:8px;cursor:pointer;transition:.25s;position:relative;overflow:hidden}
.cat-card::after{content:"";position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--em),var(--gold));transform:scaleX(0);transform-origin:left;transition:.3s}
.cat-card:hover{box-shadow:var(--sh2);transform:translateY(-4px);border-color:var(--em)}
.cat-card:hover::after{transform:scaleX(1)}
.cat-icon{width:46px;height:46px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:24px}
.cat-name{font-size:14px;font-weight:700;color:var(--forest)}
.cat-count{font-size:12px;color:var(--text3)}
.cat-arr{position:absolute;right:12px;top:50%;transform:translateY(-50%);color:var(--text3);font-size:20px;transition:.2s}
.cat-card:hover .cat-arr{transform:translateY(-50%) translateX(4px);color:var(--em)}

/* MCQ CARDS */
.mcq-list{display:flex;flex-direction:column;gap:10px}
.mcq-card{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);padding:15px 20px;display:flex;align-items:flex-start;gap:14px;cursor:pointer;transition:.22s}
.mcq-card:hover{border-color:var(--em);box-shadow:var(--sh);transform:translateX(4px)}
.mcq-num{font-family:"Space Mono",monospace;font-size:11px;font-weight:700;color:var(--em);background:rgba(34,201,123,.1);padding:4px 10px;border-radius:6px;flex-shrink:0;white-space:nowrap}
.mcq-body{flex:1}
.mcq-q{font-size:14px;font-weight:600;color:var(--text);line-height:1.5;margin-bottom:5px}
.mcq-meta{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
.tag{font-size:11px;font-weight:600;padding:2px 9px;border-radius:20px}
.tag-cat{background:rgba(13,59,46,.08);color:var(--forest2)}
.tag-e{background:rgba(34,201,123,.15);color:#0a6641}
.tag-m{background:rgba(245,200,66,.18);color:#7a5500}
.tag-h{background:rgba(255,107,91,.12);color:#c0302a}
.mcq-views{font-size:11.5px;color:var(--text3)}
.mcq-arr{color:var(--text3);font-size:22px;align-self:center;transition:.2s}
.mcq-card:hover .mcq-arr{color:var(--em);transform:translateX(4px)}

/* BLOG */
.blog-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(275px,1fr));gap:18px}
.blog-card{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);overflow:hidden;cursor:pointer;transition:.25s}
.blog-card:hover{transform:translateY(-4px);box-shadow:var(--sh2);border-color:var(--em)}
.blog-thumb{height:130px;display:flex;align-items:center;justify-content:center;font-size:48px}
.blog-body{padding:16px}
.blog-tag{display:inline-block;font-size:10px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:3px 10px;background:rgba(34,201,123,.12);color:var(--forest2);border-radius:20px;margin-bottom:8px}
.blog-title{font-size:14px;font-weight:700;color:var(--text);line-height:1.45;margin-bottom:6px}
.blog-meta{font-size:12px;color:var(--text3)}

/* LAYOUT */
.main-layout{display:grid;grid-template-columns:1fr 280px;gap:26px;max-width:1280px;margin:0 auto;padding:32px 24px}
.sidebar-box{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);padding:18px;margin-bottom:18px}
.sidebar-box h5{font-size:11px;font-weight:700;color:var(--forest);letter-spacing:.8px;text-transform:uppercase;margin-bottom:12px;padding-bottom:10px;border-bottom:1.5px solid var(--border)}
.s-link{display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--bg2);font-size:13px;color:var(--text2);cursor:pointer;transition:.15s}
.s-link:last-child{border-bottom:none}
.s-link:hover{color:var(--forest)}
.chip{display:inline-flex;align-items:center;padding:4px 12px;background:rgba(34,201,123,.1);color:var(--forest2);border-radius:20px;font-size:12px;font-weight:600;margin:3px;cursor:pointer;transition:.2s}
.chip:hover{background:rgba(34,201,123,.22)}

/* PAGE HEADER */
.pg-header{background:linear-gradient(135deg,var(--forest),var(--forest2));padding:40px 24px;color:white}
.pg-header h2{font-family:"Playfair Display",serif;font-size:34px;font-weight:900;margin-bottom:8px}
.pg-header p{color:#a8d4bc;font-size:14px}

/* CAT PAGE */
.cat-header{background:linear-gradient(135deg,var(--forest),var(--forest2));padding:40px 24px;color:white}
.cat-header h2{font-family:"Playfair Display",serif;font-size:34px;font-weight:900;margin-bottom:8px}
.box-title{font-family:"Playfair Display",serif;font-size:19px;font-weight:800;color:var(--forest);margin-bottom:13px;display:flex;align-items:center;gap:10px}
.box-title::before{content:"";display:inline-block;width:5px;height:22px;background:var(--em);border-radius:4px}
.subcat-list{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);overflow:hidden;margin-bottom:28px}
.subcat-row{display:flex;align-items:center;justify-content:space-between;padding:13px 18px;border-bottom:1px solid var(--border);cursor:pointer;transition:.15s}
.subcat-row:last-child{border-bottom:none}
.subcat-row:hover{background:rgba(34,201,123,.05)}
.subcat-l{display:flex;align-items:center;gap:10px;font-size:14px;font-weight:600;color:var(--forest)}
.subcat-dot{width:8px;height:8px;background:var(--em);border-radius:50%}
.subcat-cnt{font-size:11.5px;color:var(--text3);background:var(--bg2);padding:3px 10px;border-radius:20px}
.sets-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(115px,1fr));gap:10px;margin-bottom:28px}
.set-card{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r2);padding:14px 10px;text-align:center;cursor:pointer;transition:.2s}
.set-card:hover{border-color:var(--em);background:rgba(34,201,123,.05);transform:translateY(-2px);box-shadow:var(--sh)}
.set-num{font-family:"Space Mono",monospace;font-size:20px;font-weight:700;color:var(--forest);display:block;margin-bottom:3px}
.set-lbl{font-size:11px;color:var(--text3)}
.set-bar{margin-top:7px;height:3px;background:var(--bg2);border-radius:4px;overflow:hidden}
.set-fill{height:100%;background:var(--em);border-radius:4px}

/* MCQ DETAIL */
.seo-bar{background:var(--bg2);border-bottom:1px solid var(--border);padding:7px 24px;font-size:12px;color:var(--text3)}
.seo-bar code{background:white;padding:2px 7px;border-radius:4px;border:1px solid var(--border);font-size:11px;color:var(--forest)}
.detail-wrap{max-width:800px;margin:28px auto;padding:0 24px 48px}
.detail-card{background:var(--white);border:1.5px solid var(--border);border-radius:20px;overflow:hidden;box-shadow:var(--sh)}
.d-head{background:linear-gradient(135deg,var(--forest),var(--forest2));padding:24px 28px;color:white;display:flex;align-items:flex-start;gap:13px}
.d-num{background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.2);font-family:"Space Mono",monospace;font-size:12px;font-weight:700;padding:5px 12px;border-radius:8px;flex-shrink:0}
.d-q{font-size:16px;font-weight:600;line-height:1.6}
.opts{padding:22px 28px;display:flex;flex-direction:column;gap:10px}
.opt{display:flex;align-items:center;gap:12px;padding:12px 16px;border:2px solid var(--border);border-radius:10px;cursor:pointer;transition:.2s;font-size:14px;font-weight:500}
.opt:hover{border-color:var(--forest2);background:rgba(13,59,46,.03)}
.opt.sel{border-color:var(--em);background:rgba(34,201,123,.07)}
.opt.correct{border-color:var(--em);background:rgba(34,201,123,.12)}
.opt.wrong{border-color:var(--coral);background:rgba(255,107,91,.08)}
.opt-lbl{width:30px;height:30px;border-radius:8px;background:var(--bg2);display:flex;align-items:center;justify-content:center;font-family:"Space Mono",monospace;font-size:12px;font-weight:700;color:var(--forest);flex-shrink:0}
.opt.correct .opt-lbl{background:var(--em);color:white}
.opt.wrong .opt-lbl{background:var(--coral);color:white}
.d-actions{padding:0 28px 18px;display:flex;gap:10px;flex-wrap:wrap}
.btn{padding:9px 20px;border-radius:40px;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:700;cursor:pointer;border:none;transition:.2s;display:inline-flex;align-items:center;gap:6px}
.btn-p{background:linear-gradient(135deg,var(--em),var(--forest2));color:white}
.btn-p:hover{opacity:.9;transform:translateY(-1px)}
.btn-o{background:transparent;border:2px solid var(--border);color:var(--text2)}
.btn-o:hover{border-color:var(--forest);color:var(--forest)}
.btn-g{background:var(--gold);color:var(--forest)}
.exp-box{margin:0 28px 18px;background:rgba(34,201,123,.08);border:1.5px solid rgba(34,201,123,.25);border-radius:12px;padding:14px 16px;display:none}
.d-nav{padding:14px 28px;border-top:1.5px solid var(--border);display:flex;justify-content:space-between;align-items:center}
.discuss{border-top:1.5px solid var(--border);padding:22px 28px}
.discuss h4{font-size:15px;font-weight:700;color:var(--forest);margin-bottom:12px}
.cmt-box{width:100%;background:var(--bg);border:1.5px solid var(--border);border-radius:12px;padding:12px;font-family:"DM Sans",sans-serif;font-size:14px;resize:none;min-height:75px;outline:none;transition:.2s}
.cmt-box:focus{border-color:var(--em)}
.pagination{display:flex;align-items:center;justify-content:center;gap:5px;margin-top:24px;flex-wrap:wrap}
.pg-btn{width:36px;height:36px;border-radius:8px;border:1.5px solid var(--border);background:var(--white);font-size:13px;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:.15s;color:var(--text2);font-family:"DM Sans",sans-serif}
.pg-btn:hover{border-color:var(--em);color:var(--forest)}
.pg-btn.active{background:var(--forest);color:white;border-color:var(--forest)}

/* INTERVIEW */
.int-card{background:var(--white);border:1.5px solid var(--border);border-radius:var(--r);padding:18px 22px;cursor:pointer;transition:.2s;display:flex;align-items:center;gap:14px;margin-bottom:10px}
.int-card:hover{border-color:var(--em);box-shadow:var(--sh);transform:translateX(4px)}
.int-icon{width:44px;height:44px;background:linear-gradient(135deg,rgba(34,201,123,.15),rgba(13,59,46,.1));border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
.int-arr{color:var(--text3);font-size:20px;margin-left:auto;transition:.2s}
.int-card:hover .int-arr{color:var(--em);transform:translateX(4px)}

/* FOOTER */
footer{background:var(--forest);color:#a8d4bc;padding:52px 24px 22px}
.footer-grid{max-width:1280px;margin:0 auto;display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:36px;margin-bottom:40px}
.footer-col h5{color:white;font-size:11.5px;font-weight:700;letter-spacing:1px;text-transform:uppercase;margin-bottom:13px}
.footer-col a{display:block;color:#7aad94;font-size:13px;text-decoration:none;margin-bottom:8px;cursor:pointer;transition:.15s}
.footer-col a:hover{color:var(--emlt)}
.footer-bot{max-width:1280px;margin:0 auto;border-top:1px solid rgba(255,255,255,.1);padding-top:20px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px}
.footer-bot span{font-size:12.5px;color:#5a8a72}

/* WHATSAPP */
.wa-fab{position:fixed;bottom:28px;right:28px;width:58px;height:58px;background:linear-gradient(135deg,#25D366,#128C7E);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;box-shadow:0 4px 20px rgba(37,211,102,.45);z-index:800;text-decoration:none;transition:.2s}
.wa-fab:hover{transform:scale(1.1)}
.wa-fab svg{width:28px;height:28px;fill:white}
.wa-pulse{position:absolute;inset:-5px;border-radius:50%;background:rgba(37,211,102,.25);animation:wap 2s ease-out infinite}
@keyframes wap{0%{transform:scale(1);opacity:.8}100%{transform:scale(1.8);opacity:0}}

/* TOAST */
.toast{position:fixed;bottom:110px;right:28px;padding:14px 20px;border-radius:12px;font-size:13.5px;font-weight:600;z-index:9999;transform:translateY(120px);opacity:0;transition:all .35s cubic-bezier(.34,1.56,.64,1);box-shadow:var(--sh3);max-width:320px;pointer-events:none}
.toast.show{transform:translateY(0);opacity:1}
.toast.s{background:linear-gradient(135deg,var(--forest2),#0a4d37);color:white;border-left:4px solid var(--em)}
.toast.e{background:linear-gradient(135deg,#a02020,#7a1515);color:white;border-left:4px solid var(--coral)}
.toast.i{background:linear-gradient(135deg,#1a3a6a,#0d2550);color:white;border-left:4px solid #4a9ef5}

/* AUTH MODAL */
.overlay{position:fixed;inset:0;background:rgba(0,0,0,.65);backdrop-filter:blur(8px);z-index:9999;display:flex;align-items:center;justify-content:center;padding:20px;opacity:0;pointer-events:none;transition:.3s}
.overlay.open{opacity:1;pointer-events:all}
.auth-box{background:white;border-radius:24px;width:100%;max-width:450px;overflow:hidden;transform:translateY(40px) scale(.97);transition:all .35s cubic-bezier(.34,1.56,.64,1);box-shadow:0 32px 80px rgba(0,0,0,.3);max-height:92vh;overflow-y:auto}
.overlay.open .auth-box{transform:translateY(0) scale(1)}
.auth-head{background:linear-gradient(135deg,var(--forest),var(--forest2));padding:26px 30px 20px;text-align:center;position:relative}
.auth-head-logo{display:flex;align-items:center;justify-content:center;gap:9px;margin-bottom:12px}
.auth-head-icon{width:40px;height:40px;background:rgba(255,255,255,.15);border-radius:10px;display:flex;align-items:center;justify-content:center}
.auth-title{font-family:"Playfair Display",serif;font-size:22px;font-weight:800;color:white;margin-bottom:4px}
.auth-sub{font-size:13px;color:rgba(255,255,255,.65)}
.auth-close{position:absolute;top:14px;right:14px;width:30px;height:30px;background:rgba(255,255,255,.15);border:none;border-radius:50%;cursor:pointer;color:white;font-size:17px;display:flex;align-items:center;justify-content:center}
.auth-tabs{display:flex;background:var(--bg2);margin:16px 26px 0;border-radius:12px;padding:4px}
.auth-tab{flex:1;padding:9px;text-align:center;font-size:13.5px;font-weight:700;color:var(--text3);cursor:pointer;border-radius:9px;transition:.2s}
.auth-tab.active{background:white;color:var(--forest);box-shadow:var(--sh)}
.auth-body{padding:20px 26px 24px}
.soc-btns{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:16px}
.soc-btn{display:flex;align-items:center;justify-content:center;gap:9px;padding:11px 14px;border:1.5px solid var(--border);border-radius:12px;background:white;cursor:pointer;font-family:"DM Sans",sans-serif;font-size:13px;font-weight:600;color:var(--text);transition:.22s}
.soc-btn:hover{border-color:#ddd;box-shadow:var(--sh);transform:translateY(-1px)}
.a-divider{display:flex;align-items:center;gap:12px;margin:0 0 14px;color:var(--text3);font-size:12px;font-weight:600}
.a-divider::before,.a-divider::after{content:"";flex:1;height:1px;background:var(--border)}
.a-grp{margin-bottom:13px;position:relative}
.a-grp label{font-size:12.5px;font-weight:700;color:var(--text2);margin-bottom:6px;display:block}
.a-inp{width:100%;padding:11px 40px 11px 13px;background:var(--bg);border:1.5px solid var(--border);border-radius:11px;font-family:"DM Sans",sans-serif;font-size:14px;color:var(--text);outline:none;transition:.2s}
.a-inp:focus{border-color:var(--em);background:white;box-shadow:0 0 0 3px rgba(34,201,123,.12)}
.a-inp.err{border-color:var(--coral)}
.a-err{font-size:11.5px;color:var(--coral);margin-top:4px;display:none}
.a-err.show{display:block}
.pwd-tog{position:absolute;right:13px;bottom:12px;cursor:pointer;font-size:16px;opacity:.6}
.pwd-tog:hover{opacity:1}
.pwd-bar{margin-top:6px}
.pwd-bar-track{height:4px;background:var(--border);border-radius:4px;overflow:hidden;margin-bottom:4px}
.pwd-bar-fill{height:100%;width:0;border-radius:4px;transition:all .3s}
.pwd-bar-txt{font-size:11px;font-weight:600}
.a-submit{width:100%;padding:13px;border:none;border-radius:12px;background:linear-gradient(135deg,var(--em),var(--forest2));color:white;font-family:"DM Sans",sans-serif;font-size:15px;font-weight:700;cursor:pointer;transition:.2s;display:flex;align-items:center;justify-content:center;gap:8px;margin-top:14px}
.a-submit:hover{opacity:.92;transform:translateY(-1px)}
.a-submit:disabled{opacity:.7;cursor:not-allowed;transform:none}
.a-spin{width:18px;height:18px;border:2px solid rgba(255,255,255,.35);border-top-color:white;border-radius:50%;animation:spin .7s linear infinite;display:none}
@keyframes spin{to{transform:rotate(360deg)}}
.a-switch{text-align:center;margin-top:13px;font-size:13px;color:var(--text3)}
.a-switch a{color:var(--em);font-weight:700;cursor:pointer}
.a-success{text-align:center;padding:22px 0}
.a-success-icon{font-size:52px;display:block;margin-bottom:12px}
.a-success-title{font-family:"Playfair Display",serif;font-size:22px;color:var(--forest);margin-bottom:6px}
.a-success-sub{font-size:13.5px;color:var(--text3)}

/* RESPONSIVE */
@media(max-width:900px){.hero-card{display:none}.main-layout{grid-template-columns:1fr}.footer-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.header-inner{flex-wrap:wrap;height:auto;padding:10px 16px;gap:8px}.h-search{order:3;max-width:100%;width:100%}.hero h1{font-size:28px}.cat-grid{grid-template-columns:repeat(2,1fr)}.footer-grid{grid-template-columns:1fr}.soc-btns{grid-template-columns:1fr}.btn-admin .btn-lbl{display:none}.iq-body-row{flex-direction:column;}.iq-side-result{width:100%;margin-top:10px;}}
</style>
<style>
/* ═══════ ADMIN CSS ═══════ */
.adm{--ab:#0f1923;--as:#151f2e;--ac:#1a2740;--abr:#243350;--at:#e2e8f0;--ad:#7a93b8;--aa:#22C97B;--ag:#F5C842}
.adm.light{--ab:#f0f5f9;--as:#ffffff;--ac:#ffffff;--abr:#d0dfe8;--at:#0d2016;--ad:#5a7a9a;--aa:#0D8A52;--ag:#b07800}
.adm-wrap{min-height:100vh;background:var(--ab)}
/* Lock */
.adm-lock{min-height:100vh;background:var(--ab);display:flex;align-items:center;justify-content:center;padding:24px}
.lock-box{background:var(--ac);border:1px solid var(--abr);border-radius:24px;padding:48px 40px;max-width:420px;width:100%;box-shadow:0 32px 80px rgba(0,0,0,.5);text-align:center}
.lock-shield{width:84px;height:84px;background:linear-gradient(135deg,rgba(34,201,123,.2),rgba(13,59,46,.3));border:2px solid rgba(34,201,123,.3);border-radius:20px;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-size:38px}
.lock-title{font-family:"Playfair Display",serif;font-size:28px;color:var(--at);margin-bottom:6px}
.lock-sub{font-size:13.5px;color:var(--ad);margin-bottom:28px}
.lock-inp{width:100%;padding:13px 16px;background:rgba(255,255,255,.07);border:1.5px solid var(--abr);border-radius:12px;font-family:"DM Sans",sans-serif;font-size:15px;color:var(--at);outline:none;transition:.2s;letter-spacing:1px}
.adm.light .lock-inp{background:#f0f6ff;color:#0d2016}
.lock-inp:focus{border-color:var(--aa);box-shadow:0 0 0 3px rgba(34,201,123,.15)}
.lock-btn{width:100%;padding:14px;border:none;border-radius:12px;background:linear-gradient(135deg,var(--aa),#1A5C47);color:white;font-family:"DM Sans",sans-serif;font-size:15px;font-weight:700;cursor:pointer;transition:.2s;margin-top:14px}
.lock-btn:hover{opacity:.9;transform:translateY(-1px)}
.lock-err{background:rgba(255,107,91,.12);border:1px solid rgba(255,107,91,.3);color:#ff8070;font-size:13px;padding:10px 14px;border-radius:10px;margin-bottom:14px;display:none}
/* Layout */
.adm-layout{display:grid;grid-template-columns:260px 1fr;min-height:100vh}
/* Sidebar */
.adm-sb{background:var(--as);border-right:1px solid var(--abr);display:flex;flex-direction:column;position:sticky;top:0;height:100vh;overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--abr) transparent}
.sb-logo{display:flex;align-items:center;gap:12px;padding:20px 16px 16px;border-bottom:1px solid var(--abr)}
.sb-logo-icon{width:38px;height:38px;background:linear-gradient(135deg,var(--aa),#1A5C47);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.sb-logo-icon svg{width:20px;height:20px}
.sb-logo-name{font-family:"Playfair Display",serif;font-size:18px;font-weight:900;color:var(--at)}
.sb-logo-name span{color:var(--aa)}
.sb-logo-sub{font-size:10px;color:var(--ad);letter-spacing:1px;text-transform:uppercase}
.sb-sec{padding:14px 12px 4px}
.sb-sec-lbl{font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--ad);padding:0 8px;margin-bottom:5px}
.sb-item{display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:9px;cursor:pointer;transition:.2s;color:var(--ad);font-size:13px;font-weight:500;margin-bottom:2px;position:relative}
.sb-item:hover{background:rgba(255,255,255,.05);color:var(--at)}
.adm.light .sb-item:hover{background:rgba(13,59,46,.05)}
.sb-item.active{background:linear-gradient(135deg,rgba(34,201,123,.18),rgba(13,59,46,.2));color:var(--aa);font-weight:700}
.adm.light .sb-item.active{background:linear-gradient(135deg,rgba(13,139,82,.12),rgba(13,59,46,.08))}
.sb-item.active::before{content:"";position:absolute;left:0;top:50%;transform:translateY(-50%);width:3px;height:22px;background:var(--aa);border-radius:4px}
.sb-icon{font-size:16px;width:20px;text-align:center;flex-shrink:0}
.sb-badge{margin-left:auto;background:rgba(34,201,123,.2);color:var(--aa);font-size:10px;font-weight:700;padding:2px 7px;border-radius:20px}
.sb-badge.new{background:rgba(245,200,66,.2);color:var(--ag)}
.sb-user{padding:14px 16px;border-top:1px solid var(--abr);display:flex;align-items:center;gap:10px;margin-top:auto}
.sb-av{width:34px;height:34px;border-radius:9px;background:linear-gradient(135deg,var(--aa),#1A5C47);display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;color:white;flex-shrink:0}
.sb-name{font-size:12.5px;font-weight:700;color:var(--at)}
.sb-role{font-size:11px;color:var(--ad)}
.sb-logout{margin-left:auto;cursor:pointer;color:var(--ad);font-size:16px;transition:.2s;background:none;border:none}
.sb-logout:hover{color:#FF6B5B}
/* Topbar */
.adm-topbar{background:var(--as);border-bottom:1px solid var(--abr);padding:0 24px;height:64px;display:flex;align-items:center;justify-content:space-between;gap:14px;position:sticky;top:0;z-index:100}
.adm-topbar-title{font-size:18px;font-weight:700;color:var(--at)}
.adm-topbar-r{display:flex;align-items:center;gap:10px}
.adm-search{display:flex;align-items:center;background:rgba(255,255,255,.07);border:1px solid var(--abr);border-radius:9px;padding:0 12px;height:36px;gap:8px}
.adm.light .adm-search{background:#f0f6ff}
.adm-search input{border:none;background:transparent;font-family:"DM Sans",sans-serif;font-size:13px;color:var(--at);outline:none;width:160px}
.adm-search input::placeholder{color:var(--ad)}
.mode-btn{display:flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,.07);border:1.5px solid var(--abr);border-radius:40px;cursor:pointer;font-family:"DM Sans",sans-serif;font-size:12.5px;font-weight:700;color:var(--at);transition:.2s;white-space:nowrap}
.adm.light .mode-btn{background:rgba(13,59,46,.07);border-color:rgba(13,139,82,.25)}
.mode-btn:hover{border-color:var(--aa)}
.notif-btn{width:36px;height:36px;background:rgba(255,255,255,.07);border:1px solid var(--abr);border-radius:9px;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:15px;position:relative;transition:.2s}
.adm.light .notif-btn{background:#f0f6ff}
.notif-dot{position:absolute;top:5px;right:5px;width:7px;height:7px;background:#FF6B5B;border-radius:50%;border:2px solid var(--as)}
/* Content */
.adm-right{display:flex;flex-direction:column}
.adm-content{padding:24px 26px;flex:1}
.adm-tab{display:none}
.adm-tab.active{display:block}
.adm-pg-title{font-family:"Playfair Display",serif;font-size:22px;font-weight:800;color:var(--at);margin-bottom:4px}
.adm-pg-sub{font-size:13px;color:var(--ad);margin-bottom:20px}
/* Stat Grid */
.stat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:22px}
.stat-card{background:var(--ac);border:1px solid var(--abr);border-radius:14px;padding:20px;transition:.25s;cursor:default}
.stat-card:hover{transform:translateY(-3px);box-shadow:0 12px 40px rgba(0,0,0,.3)}
.sc-icon{font-size:28px;margin-bottom:10px;display:block}
.sc-num{font-family:"Space Mono",monospace;font-size:28px;font-weight:700;color:var(--at);display:block;margin-bottom:4px}
.sc-lbl{font-size:12px;color:var(--ad)}
.sc-chg{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:700;padding:2px 8px;border-radius:20px;margin-top:8px;background:rgba(34,201,123,.15);color:var(--aa)}
/* 2-col */
.adm-2col{display:grid;grid-template-columns:2fr 1fr;gap:18px;margin-bottom:22px}
.adm-card{background:var(--ac);border:1px solid var(--abr);border-radius:14px;padding:20px}
.adm-card-title{font-size:14px;font-weight:700;color:var(--at);margin-bottom:3px}
.adm-card-sub{font-size:12px;color:var(--ad);margin-bottom:16px}
/* Activity */
#actFeed{max-height:340px;overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--abr) transparent}
.act-item{display:flex;align-items:flex-start;gap:11px;padding:10px 0;border-bottom:1px solid var(--abr)}
.act-item:last-child{border-bottom:none}
.act-dot{width:32px;height:32px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.act-title{font-size:12.5px;font-weight:600;color:var(--at);line-height:1.4}
.act-time{font-size:11px;color:var(--ad);margin-top:2px}
.act-badge{font-size:10.5px;font-weight:700;padding:2px 7px;border-radius:20px;white-space:nowrap}
.act-empty{text-align:center;padding:30px 0;color:var(--ad)}
.act-empty-icon{font-size:30px;display:block;margin-bottom:8px}
.act-count{background:rgba(34,201,123,.2);color:var(--aa);font-size:10px;font-weight:700;padding:2px 8px;border-radius:20px;margin-left:7px}
/* Quick Actions */
.qa-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px}
.qa-btn{background:rgba(255,255,255,.04);border:1px solid var(--abr);border-radius:11px;padding:14px 10px;cursor:pointer;transition:.2s;text-align:center}
.adm.light .qa-btn{background:#f5f9ff}
.qa-btn:hover{background:rgba(34,201,123,.1);border-color:rgba(34,201,123,.3);transform:translateY(-2px)}
.qa-btn-icon{font-size:22px;display:block;margin-bottom:5px}
.qa-btn-label{font-size:11.5px;font-weight:700;color:var(--ad)}
.qa-btn:hover .qa-btn-label{color:var(--aa)}
/* Table */
.adm-tbl-wrap{background:var(--ac);border:1px solid var(--abr);border-radius:14px;overflow:hidden}
.adm-tbl-head{padding:16px 20px;border-bottom:1px solid var(--abr);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px}
.adm-tbl-title{font-size:14px;font-weight:700;color:var(--at)}
.adm-tbl-actions{display:flex;gap:8px;flex-wrap:wrap;align-items:center}
table.adm-table{width:100%;border-collapse:collapse;min-width:580px}
.adm-table th{padding:11px 14px;text-align:left;font-size:10.5px;font-weight:700;color:var(--ad);letter-spacing:.8px;text-transform:uppercase;border-bottom:1px solid var(--abr);white-space:nowrap}
.adm-table td{padding:12px 14px;font-size:12.5px;color:var(--ad);border-bottom:1px solid var(--abr)}
.adm-table tr:last-child td{border-bottom:none}
.adm-table tr:hover td{background:rgba(255,255,255,.03);color:var(--at)}
.adm.light .adm-table tr:hover td{background:rgba(13,59,46,.03)}
.td-main{font-weight:600;color:var(--at);max-width:240px}
.tbl-pag{padding:12px 18px;border-top:1px solid var(--abr);display:flex;align-items:center;justify-content:space-between}
.tbl-pag span{font-size:12px;color:var(--ad)}
/* Buttons */
.ab{padding:7px 14px;border-radius:8px;font-family:"DM Sans",sans-serif;font-size:12px;font-weight:700;cursor:pointer;border:none;transition:.2s;display:inline-flex;align-items:center;gap:5px}
.ab-p{background:linear-gradient(135deg,var(--aa),#1A5C47);color:white}
.ab-p:hover{opacity:.9}
.ab-o{background:rgba(255,255,255,.06);border:1px solid var(--abr);color:var(--ad)}
.adm.light .ab-o{background:white;color:var(--ad)}
.ab-o:hover{background:rgba(255,255,255,.1);color:var(--at)}
.ab-d{background:rgba(255,107,91,.15);border:1px solid rgba(255,107,91,.3);color:#FF6B5B}
.ab-d:hover{background:rgba(255,107,91,.25)}
.ab-g{background:rgba(245,200,66,.15);border:1px solid rgba(245,200,66,.3);color:var(--ag)}
/* Status */
.st{font-size:10.5px;font-weight:700;padding:3px 9px;border-radius:20px;display:inline-block}
.st-pub{background:rgba(34,201,123,.15);color:var(--aa)}
.st-sch{background:rgba(245,200,66,.15);color:var(--ag)}
.st-dft{background:rgba(255,255,255,.08);color:var(--ad)}
.adm.light .st-dft{background:rgba(0,0,0,.07)}
.st-user{background:rgba(74,158,245,.15);color:#4a9ef5}
.st-del{background:rgba(255,107,91,.15);color:#FF6B5B}
.chip-a{background:rgba(255,255,255,.08);color:var(--at);font-size:11px;padding:2px 8px;border-radius:6px;font-weight:600}
.adm.light .chip-a{background:rgba(13,59,46,.08);color:#0d2016}
.diff-e{background:rgba(34,201,123,.12);color:var(--aa);font-size:10.5px;font-weight:700;padding:2px 8px;border-radius:20px}
.diff-m{background:rgba(245,200,66,.12);color:var(--ag);font-size:10.5px;font-weight:700;padding:2px 8px;border-radius:20px}
.diff-h{background:rgba(255,107,91,.12);color:#FF6B5B;font-size:10.5px;font-weight:700;padding:2px 8px;border-radius:20px}
/* Forms */
.adm-form{background:var(--ac);border:1px solid var(--abr);border-radius:14px;padding:22px;margin-bottom:18px}
.adm-form-title{font-size:15px;font-weight:700;color:var(--at);margin-bottom:4px}
.adm-form-sub{font-size:12.5px;color:var(--ad);margin-bottom:18px}
.adm-f{margin-bottom:14px}
.adm-f label{font-size:12px;font-weight:700;color:var(--ad);margin-bottom:5px;display:block;letter-spacing:.3px}
.adm-inp{width:100%;padding:10px 13px;background:rgba(255,255,255,.07);border:1.5px solid var(--abr);border-radius:9px;font-family:"DM Sans",sans-serif;font-size:13.5px;color:var(--at);outline:none;transition:.2s}
.adm.light .adm-inp{background:#f0f6ff;color:#0d2016}
.adm-inp:focus{border-color:var(--aa);background:rgba(255,255,255,.1);box-shadow:0 0 0 3px rgba(34,201,123,.1)}
.adm.light .adm-inp:focus{background:white}
.adm-sel{width:100%;padding:10px 13px;background:rgba(255,255,255,.07);border:1.5px solid var(--abr);border-radius:9px;font-family:"DM Sans",sans-serif;font-size:13.5px;color:var(--at);outline:none;cursor:pointer}
.adm.light .adm-sel{background:#f0f6ff;color:#0d2016}
.adm-sel option{background:#1a2740;color:#e2e8f0}
.adm.light .adm-sel option{background:white;color:#0d2016}
textarea.adm-inp{resize:vertical;min-height:80px}
/* MCQ Block */
.mcq-blk{background:rgba(255,255,255,.04);border:1px solid var(--abr);border-radius:12px;padding:18px;margin-bottom:14px}
.adm.light .mcq-blk{background:#f5f9ff}
.mcq-blk-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:14px}
.mcq-blk-num{font-family:"Space Mono",monospace;font-size:12px;font-weight:700;color:var(--aa);background:rgba(34,201,123,.12);padding:3px 11px;border-radius:20px}
.opt-row{display:flex;align-items:center;gap:9px;margin-bottom:9px}
.opt-let{width:30px;height:30px;background:rgba(255,255,255,.08);border:1px solid var(--abr);border-radius:7px;display:flex;align-items:center;justify-content:center;font-family:"Space Mono",monospace;font-size:12px;font-weight:700;color:var(--aa);flex-shrink:0}
.adm.light .opt-let{background:#e8f4ff}
.opt-radio{width:17px;height:17px;accent-color:var(--aa);cursor:pointer;flex-shrink:0}
.add-opt{display:flex;align-items:center;gap:7px;color:var(--aa);font-size:12.5px;font-weight:700;cursor:pointer;padding:5px 0;opacity:.8}
.add-opt:hover{opacity:1}
/* Upload */
.upload-area{border:2px dashed var(--abr);border-radius:11px;padding:26px;text-align:center;cursor:pointer;transition:.2s}
.upload-area:hover{border-color:var(--aa);background:rgba(34,201,123,.04)}
.upload-area input{display:none}
/* Note tabs */
.note-tabs{display:flex;background:rgba(255,255,255,.04);border:1px solid var(--abr);border-radius:9px;overflow:hidden;margin-bottom:16px}
.adm.light .note-tabs{background:#f0f6ff}
.note-tab{flex:1;padding:10px;text-align:center;font-size:13px;font-weight:600;cursor:pointer;transition:.2s;color:var(--ad)}
.note-tab.active{background:linear-gradient(135deg,rgba(34,201,123,.2),rgba(13,59,46,.2));color:var(--aa)}
/* Published Cards */
.pub-card{background:rgba(255,255,255,.04);border:1px solid var(--abr);border-radius:11px;padding:14px 16px;display:flex;align-items:center;gap:12px;margin-bottom:9px;transition:.2s}
.adm.light .pub-card{background:#f8fbff}
.pub-card:hover{background:rgba(255,255,255,.07);border-color:rgba(34,201,123,.25)}
.adm.light .pub-card:hover{background:#eef5ff}
.pub-icon{width:40px;height:40px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.pub-body{flex:1}
.pub-title{font-size:13px;font-weight:700;color:var(--at);margin-bottom:2px}
.pub-meta{font-size:11.5px;color:var(--ad)}
.pub-actions{display:flex;gap:6px}
.pub-empty{text-align:center;padding:28px;color:var(--ad);font-size:13px;background:var(--ac);border-radius:11px;border:1px solid var(--abr)}
/* Editor */
.ed-toolbar{display:flex;flex-wrap:wrap;gap:4px;padding:10px 12px;background:rgba(255,255,255,.04);border:1px solid var(--abr);border-radius:10px 10px 0 0;border-bottom:none}
.adm.light .ed-toolbar{background:#f0f6ff}
.ed-btn{padding:6px 10px;border:1px solid var(--abr);background:rgba(255,255,255,.05);color:var(--at);border-radius:7px;font-family:"DM Sans",sans-serif;font-size:12px;font-weight:600;cursor:pointer;transition:.2s}
.adm.light .ed-btn{background:white}
.ed-btn:hover{background:rgba(34,201,123,.12);border-color:var(--aa);color:var(--aa)}
.ed-sep{width:1px;height:24px;background:var(--abr);margin:0 3px;align-self:center}
.ed-area{min-height:360px;padding:20px 22px;background:rgba(255,255,255,.03);border:1px solid var(--abr);border-radius:0 0 10px 10px;color:var(--at);font-family:"DM Sans",sans-serif;font-size:14.5px;line-height:1.8;outline:none}
.adm.light .ed-area{background:white;color:#0d2016}
.ed-area:empty::before{content:"Start writing your article here…";color:var(--ad);pointer-events:none}
.ed-area h1,.ed-area h2,.ed-area h3{font-family:"Playfair Display",serif;color:var(--at)}
.ed-area h1{font-size:28px;margin:16px 0 8px}
.ed-area h2{font-size:22px;margin:14px 0 7px}
.ed-area h3{font-size:18px;margin:12px 0 6px}
.ed-area blockquote{border-left:4px solid var(--aa);padding:10px 16px;margin:12px 0;background:rgba(34,201,123,.06);border-radius:0 8px 8px 0;font-style:italic}
.ed-area img{max-width:100%;height:auto;border-radius:8px;margin:10px 0;display:block}
.ed-area a{color:var(--aa);text-decoration:underline}
.slug-preview{background:rgba(34,201,123,.07);border:1px solid rgba(34,201,123,.2);border-radius:8px;padding:9px 12px;font-size:12px;color:var(--ad);margin-top:4px}
.slug-preview span{color:var(--aa)}
/* Modals */
.mod{position:fixed;inset:0;background:rgba(0,0,0,.6);backdrop-filter:blur(4px);z-index:99999;display:flex;align-items:center;justify-content:center;padding:20px;opacity:0;pointer-events:none;transition:.25s}
.mod.open{opacity:1;pointer-events:all}
.mod-box{background:var(--ac);border:1px solid var(--abr);border-radius:16px;padding:28px;max-width:480px;width:100%;box-shadow:0 24px 60px rgba(0,0,0,.4)}
.mod-box h4{font-size:16px;font-weight:700;color:var(--at);margin-bottom:18px}
.mod-f{margin-bottom:14px}
.mod-f label{font-size:12px;font-weight:700;color:var(--ad);margin-bottom:5px;display:block}
.mod-f input,.mod-f select{width:100%;padding:10px 13px;background:rgba(255,255,255,.07);border:1.5px solid var(--abr);border-radius:9px;font-family:"DM Sans",sans-serif;font-size:13.5px;color:var(--at);outline:none}
.adm.light .mod-f input,.adm.light .mod-f select{background:#f0f6ff;color:#0d2016}
.mod-f input:focus{border-color:var(--aa)}
.mod-f select option{background:#1a2740}
.adm.light .mod-f select option{background:white;color:#0d2016}
.mod-actions{display:flex;gap:10px;justify-content:flex-end;margin-top:18px}
.img-tabs{display:flex;border:1px solid var(--abr);border-radius:9px;overflow:hidden;margin-bottom:14px}
.img-tab{flex:1;padding:9px;text-align:center;font-size:12.5px;font-weight:600;cursor:pointer;color:var(--ad);transition:.2s}
.img-tab.active{background:rgba(34,201,123,.15);color:var(--aa)}
/* Sched input */
.sched-inp{background:rgba(255,255,255,.07);border:1px solid var(--abr);border-radius:7px;padding:5px 9px;font-family:"DM Sans",sans-serif;font-size:11px;color:var(--at);outline:none;width:150px}
.adm.light .sched-inp{background:#f0f6ff;color:#0d2016}
.sched-inp:focus{border-color:var(--aa)}

/* SECTION TABS */
.sec-tab{padding:8px 16px;border-radius:6px;font-size:12.5px;font-weight:700;cursor:pointer;white-space:nowrap;border:2px solid var(--border);background:var(--white);color:var(--text2);transition:.2s;}
.sec-tab:hover{border-color:var(--em);color:var(--forest);}
.sec-tab.active{background:var(--em);border-color:var(--em);color:white;}

/* INLINE MCQ QUESTION CARDS */
.iq-card{background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:18px 22px;margin-bottom:14px;transition:.2s;}
.iq-card.answered-correct{border-color:var(--em);background:rgba(34,201,123,.04);}
.iq-card.answered-wrong{border-color:var(--coral);background:rgba(255,107,91,.04);}
.iq-num{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:var(--em);color:white;border-radius:7px;font-family:'Space Mono',monospace;font-size:12px;font-weight:700;flex-shrink:0;margin-right:10px;}
.iq-q{font-size:14.5px;font-weight:600;color:var(--text);line-height:1.6;margin-bottom:14px;}
.iq-body-row{display:flex;flex-direction:column;gap:12px;}
.iq-opts{display:flex;flex-direction:column;gap:8px;width:100%;}
.iq-opt{display:flex;align-items:center;gap:10px;padding:9px 14px;border:2px solid var(--border);border-radius:9px;cursor:pointer;transition:.2s;font-size:13.5px;font-weight:500;color:var(--text2);}
.iq-opt:hover:not(.opt-locked){border-color:var(--forest2);background:rgba(13,59,46,.03);}
.iq-opt.opt-sel{border-color:var(--forest2);background:rgba(13,59,46,.05);}
.iq-opt.opt-correct{border-color:var(--em)!important;background:rgba(34,201,123,.1)!important;color:var(--forest)!important;}
.iq-opt.opt-wrong{border-color:var(--coral)!important;background:rgba(255,107,91,.08)!important;color:#c0302a!important;}
.iq-opt-lbl{width:28px;height:28px;border-radius:6px;background:var(--bg2);display:flex;align-items:center;justify-content:center;font-family:'Space Mono',monospace;font-size:11px;font-weight:700;color:var(--forest);flex-shrink:0;}
.iq-opt.opt-correct .iq-opt-lbl{background:var(--em);color:white;}
.iq-opt.opt-wrong .iq-opt-lbl{background:var(--coral);color:white;}
.iq-side-result{width:100%;display:none;flex-direction:column;gap:8px;}
.iq-side-result.show{display:flex;}
.iq-result{padding:10px 13px;border-radius:9px;font-size:13px;font-weight:700;display:none;width:100%;}
.iq-result.show{display:block;}
.iq-result.res-correct{background:rgba(34,201,123,.12);color:var(--forest2);border:1.5px solid rgba(34,201,123,.3);}
.iq-result.res-wrong{background:rgba(255,107,91,.1);color:#c0302a;border:1.5px solid rgba(255,107,91,.25);}
.iq-exp{padding:14px 16px;background:rgba(34,201,123,.07);border:1.5px solid rgba(34,201,123,.25);border-radius:10px;font-size:13.5px;color:var(--text2);line-height:1.8;display:none;width:100%;margin-top:4px;}
.iq-exp.show{display:block;}

/* SEARCH DROPDOWN */
.s-result{display:flex;align-items:center;gap:11px;padding:11px 16px;border-bottom:1px solid var(--bg2);cursor:pointer;transition:.15s;}
.s-result:hover{background:var(--bg);}
.s-result:last-child{border-bottom:none;}
.s-result-icon{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0;}
.s-result-title{font-size:13.5px;font-weight:700;color:var(--forest);}
.s-result-sub{font-size:11.5px;color:var(--text3);}

nav::-webkit-scrollbar{display:none}
nav{-ms-overflow-style:none;scrollbar-width:none;}
#sectionTabs::-webkit-scrollbar{display:none;}
#sectionTabs2::-webkit-scrollbar{display:none;}

/* PUBLISH TARGET BOXES */
.pt-box { transition:.2s; }
.pt-box select { pointer-events: none; }
.pt-box.pt-active select { pointer-events: auto; }
.pt-box:not(.pt-active) select { opacity:.5; cursor:not-allowed; }

/* PAGINATION */
.pagination { display:flex; gap:6px; flex-wrap:wrap; justify-content:center; margin-top:24px; padding-bottom:12px; }
.pg-btn { padding:7px 13px; border:1.5px solid var(--border); background:var(--white); color:var(--text2); border-radius:8px; font-family:'DM Sans',sans-serif; font-size:13px; font-weight:600; cursor:pointer; transition:.2s; }
.pg-btn:hover { border-color:var(--em); color:var(--em); }
.pg-btn.active { background:var(--em); border-color:var(--em); color:white; font-weight:800; }
.pg-btn:disabled { opacity:.4; cursor:not-allowed; }
</style>
</head>
<body>
<!-- ░░ MYSQL LOADING OVERLAY ░░ -->
<div id="loadingOverlay" style="display:flex;position:fixed;inset:0;background:var(--forest);z-index:99999;align-items:center;justify-content:center;flex-direction:column;gap:16px;">
  <div style="width:52px;height:52px;background:linear-gradient(135deg,#22C97B,#1A5C47);border-radius:14px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(34,201,123,.4);">
    <svg width="28" height="28" viewBox="0 0 24 24" stroke="white" stroke-width="2.2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
  </div>
  <div style="color:white;font-family:'DM Sans',sans-serif;font-size:18px;font-weight:700;">Vokomoon</div>
  <div style="display:flex;gap:6px;align-items:center;">
    <div style="width:8px;height:8px;border-radius:50%;background:#22C97B;animation:ldot 1.2s ease-in-out infinite;"></div>
    <div style="width:8px;height:8px;border-radius:50%;background:#22C97B;animation:ldot 1.2s ease-in-out .2s infinite;"></div>
    <div style="width:8px;height:8px;border-radius:50%;background:#22C97B;animation:ldot 1.2s ease-in-out .4s infinite;"></div>
  </div>
  <div style="color:#a8d4bc;font-size:13px;font-family:'DM Sans',sans-serif;">Loading from database…</div>
</div>
<style>
@keyframes ldot{0%,80%,100%{opacity:.2;transform:scale(.8)}40%{opacity:1;transform:scale(1)}}
</style>

<div id="toast" class="toast"></div>

<!-- TOPBAR -->
<div class="topbar">
  <span>📚 Pakistan's #1 Vokomoon Learning Platform</span>
  <span><a onclick="go('help')" style="cursor:pointer">Help</a><a onclick="go('contact')" style="cursor:pointer">Contact</a><a onclick="go('sitemap')" style="cursor:pointer">Sitemap</a></span>
</div>

<!-- HEADER -->
<header>
  <div class="header-inner">
    <div class="logo" onclick="go('home')">
      <div class="logo-icon"><svg viewBox="0 0 24 24" stroke="white" stroke-width="2.2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
      <div><div class="logo-name">VoKo<span>Moon</span></div><div class="logo-sub">Smart Learning Hub</div></div>
    </div>
    <div class="h-search">
      <svg width="15" height="15" viewBox="0 0 24 24" stroke="#6B9B82" stroke-width="2.5" fill="none"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      <input type="text" id="mainSearchInp" placeholder="Search questions, topics, categories…" oninput="liveSearch(this.value)" autocomplete="off">
    </div>
    <!-- Search Results Dropdown -->
    <div id="searchDrop" style="display:none;position:absolute;top:68px;left:50%;transform:translateX(-50%);width:480px;max-width:90vw;background:white;border:1.5px solid var(--border);border-radius:14px;box-shadow:var(--sh3);z-index:9999;max-height:400px;overflow-y:auto;"></div>
    <div class="h-actions" id="hActions">
      <!-- <button class="btn-admin" onclick="go('admin')"><div class="dot"></div>🛡️ <span class="btn-lbl">Admin Panel</span></button> -->
      <button class="btn-login" onclick="openAuth('login')">Login</button>
      <button class="btn-reg" onclick="openAuth('register')">Register Free</button>
    </div>
  </div>
</header>

<!-- NAV -->
<nav style="overflow-x:auto;"><div class="nav-inner" id="mainNav">
  <button class="nav-btn active" id="navHome" onclick="go('home')">🏠 Home</button>
  <!-- JS will inject category buttons here with class dyn-nav -->
  <button class="nav-btn" id="navBlog" onclick="go('blog')">✍️ Blog</button>
  <button class="nav-btn" id="navInterview" onclick="go('interview')">💼 Interview</button>
  <button class="nav-btn" id="navSaved" onclick="goSaved()">🔖 Saved</button>
  <button class="nav-btn" id="navAsk" onclick="go('ask')">Ask Question</button>
</div></nav>

<!-- ░░ HOME PAGE ░░ -->
<div class="page active" id="page-home">
  <div class="hero">
    <div class="hero-inner" style="justify-content:center;">
      <div class="hero-text" style="max-width:700px;text-align:center;">
        <div class="hero-badge">✦ Pakistan's Premier vokomoon Platform</div>
        <h1>Master Every Exam<br>with <span>Smart MCQs</span></h1>
        <p style="margin-left:auto;margin-right:auto;">Practice thousands of curated MCQs for CSS, PPSC, FPSC, NTS and all academic exams. Free forever.</p>
        <div class="hero-stats" style="justify-content:center;">
          <div><span class="stat-num" id="heroMcqCount">0</span><span class="stat-lbl">MCQ Questions</span></div>
          <div><span class="stat-num" id="heroCatCount">10</span><span class="stat-lbl">Categories</span></div>
          <div><span class="stat-num" id="heroUserCount">0</span><span class="stat-lbl">Active Learners</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Categories Section -->
  <div style="padding:36px 24px;background:var(--white);border-bottom:1.5px solid var(--border);">
    <div class="container">
      <div class="sec-row">
        <div><div class="sec-title">All Categories</div><div style="font-size:13px;color:var(--text3);margin-top:3px;">Click any category to explore MCQ sets</div></div>
      </div>
      <div class="cat-grid" id="homeCatGrid"><!-- JS --></div>
    </div>
  </div>

  
  <!-- PDF published on homepage -->
  <div id="homePdfSec" style="display:none;background:var(--white);border-bottom:1.5px solid var(--border);padding:28px 0;">
    <div class="container">
      <div class="sec-row" style="margin-bottom:14px;"><div class="sec-title" style="font-size:20px;">📄 Latest PDFs</div></div>
      <div class="mcq-list" id="homePdfList"></div>
    </div>
  </div>
  <!-- Videos published on homepage -->
  <div id="homeVidSec" style="display:none;background:var(--white);border-bottom:1.5px solid var(--border);padding:28px 0;">
    <div class="container">
      <div class="sec-row" style="margin-bottom:14px;"><div class="sec-title" style="font-size:20px;">🎥 Latest Videos</div></div>
      <div class="mcq-list" id="homeVidList"></div>
    </div>
  </div>
  <!-- Notes published on homepage -->
  <div id="homeNotesSec" style="display:none;background:var(--white);border-bottom:1.5px solid var(--border);padding:28px 0;">
    <div class="container">
      <div class="sec-row" style="margin-bottom:14px;"><div class="sec-title" style="font-size:20px;">📓 Latest Notes</div></div>
      <div class="mcq-list" id="homeNotesList"></div>
    </div>
  </div>

<div class="main-layout">
    <div>
      <div style="margin-bottom:30px;">
        <div class="sec-row" style="margin-bottom:14px;">
          <div class="sec-title" style="font-size:20px;">Latest MCQs</div>
          <div class="view-all">View All →</div>
        </div>
        <div class="mcq-list" id="homeMcqList"><!-- JS --></div>
      </div>
      <div>
        <div class="sec-row" style="margin-bottom:14px;">
          <div class="sec-title" style="font-size:20px;">Latest Articles</div>
          <div class="view-all" onclick="go('blog')">All Articles →</div>
        </div>
        <div class="blog-grid" id="homeBlogGrid"><!-- JS --></div>
      </div>
    </div>
    <div class="sidebar">
      <div class="sidebar-box">
        <h5>....</h5>
        <div class="s-link">website : Vokomoon.com <span style="color:var(--em)">›</span></div>
        <div class="s-link">any problem; contact me <span style="color:var(--em)">›</span></div>
        <div class="s-link">On Whatsaap Number <span style="color:var(--em)">›</span></div>
        <div class="s-link">+92 303 9181337 <span style="color:var(--em)">›</span></div>
        <div class="s-link">Coming soon andriod app <span style="color:var(--em)">›</span></div>
      </div>
      <div class="sidebar-box">
        <h5>🏷️ Popular Tags</h5>
        <div id="homeTags">
          <span class="chip">CSS</span><span class="chip">PPSC</span><span class="chip">FPSC</span>
          <span class="chip">NTS</span><span class="chip">English</span><span class="chip">Maths</span>
          <span class="chip">GK</span><span class="chip">Science</span>
        </div>
      </div>
      <div class="sidebar-box" style="background:linear-gradient(135deg,var(--forest),var(--forest2));border-color:var(--forest);">
        <h5 style="color:var(--emlt);">📱 WhatsApp Group</h5>
        <p style="font-size:13px;color:#a8d4bc;line-height:1.6;margin-bottom:12px;">Join 50,000+ students for daily MCQs and updates.</p>
        <a href="https://wa.me/923039181337" target="_blank" style="display:inline-flex;align-items:center;gap:8px;background:#25D366;color:white;padding:9px 16px;border-radius:40px;font-size:13px;font-weight:700;text-decoration:none;">📲 Join Now</a>
      </div>
    </div>
  </div>
</div>

<!-- ░░ CATEGORY PAGE ░░ -->
<div class="page" id="page-catpage">
  <div class="cat-header"><div class="container">
    <div id="cpBread" style="font-size:13px;color:#a8d4bc;margin-bottom:8px;"></div>
    <h2 id="cpTitle">Category</h2>
    <p id="cpDesc" style="color:#a8d4bc;font-size:14px;"></p>
    <div style="display:flex;gap:12px;margin-top:16px;flex-wrap:wrap;">
      <span style="background:rgba(255,255,255,.12);padding:7px 16px;border-radius:40px;font-size:12.5px;font-weight:600;" id="cpMcqCnt">0 MCQs</span>
      <span style="background:rgba(255,255,255,.12);padding:7px 16px;border-radius:40px;font-size:12.5px;font-weight:600;" id="cpSetCnt">0 Sets</span>
    </div>
  </div></div>
  <div style="max-width:1280px;margin:28px auto 0;padding:0 24px;">
    <div class="box-title">Sub-Categories</div>
    <div class="subcat-list" id="cpSubcats"></div>
    <div class="box-title" style="margin-top:28px;">All Sets</div>
    <div class="sets-grid" id="cpSets"></div>

    <div id="cpPdfSec" style="display:none;margin-top:28px;">
      <div class="box-title">📄 PDF Documents</div>
      <div class="mcq-list" id="cpPdfList"></div>
    </div>
    <div id="cpVidSec" style="display:none;margin-top:28px;">
      <div class="box-title">🎥 Video Classes</div>
      <div class="mcq-list" id="cpVidList"></div>
    </div>
    <div id="cpNotesSec" style="display:none;margin-top:28px;">
      <div class="box-title">📓 Study Notes</div>
      <div class="mcq-list" id="cpNotesList"></div>
    </div>
  </div>
</div>

<!-- ░░ SET PAGE ░░ -->
<div class="page" id="page-setpage">
  <div class="seo-bar"><div class="container"><code id="setSeoUrl">Vokomoon.com/…</code> <span style="color:var(--em);font-weight:600;margin-left:8px;">✓ SEO URL</span></div></div>
  <div class="cat-header" style="padding:24px;"><div class="container">
    <div id="setBread" style="font-size:13px;color:#a8d4bc;margin-bottom:6px;"></div>
    <h2 style="font-size:24px;" id="setTitle">Set 1</h2>
    <p id="setSubt" style="font-size:13px;color:#a8d4bc;"></p>
  </div></div>
  <!-- Section Tabs -->
  <div style="background:var(--white);border-bottom:1.5px solid var(--border);overflow-x:auto;">
    <div class="container" style="padding-top:0;padding-bottom:0;">
      <div id="sectionTabs" style="display:flex;gap:4px;padding:10px 0;flex-wrap:nowrap;overflow-x:auto;scrollbar-width:none;"></div>
    </div>
  </div>
  <div class="container" style="padding-top:22px;padding-bottom:40px;">
    <div id="setMcqList"></div>
    <!-- Submit Button -->
    <div id="setSubmitWrap" style="display:none;margin-top:20px;text-align:center;">
      
      <button class="btn btn-o" onclick="resetSetAnswers()" id="setResetBtn" style="padding:12px 24px;font-size:15px;display:none;margin-left:10px;">🔄 Try Again</button>
    </div>
    <div id="sectionTabs2" style="display:flex;gap:4px;padding:10px 0;flex-wrap:nowrap;overflow-x:auto;scrollbar-width:none;"></div>
    <div class="pagination" id="setPag"></div>
  </div>
</div>

<!-- ░░ MCQ DETAIL ░░ -->
<div class="page" id="page-mcqdetail">
  <div class="seo-bar"><div class="container"><code id="mcqSeoUrl">Vokomoon.com/q/…</code></div></div>
  <div class="detail-wrap">
    <div id="mcqBread" style="font-size:12.5px;color:var(--text3);margin-bottom:10px;"></div>
    <div class="detail-card">
      <div class="d-head"><div class="d-num" id="mcqNum">Q.1</div><div class="d-q" id="mcqQ">Question</div></div>
      <div class="opts" id="mcqOpts"></div>
      <div class="d-actions">
        <button class="btn btn-p" id="mcqSubmitBtn" onclick="submitMcqAns()">✓ Submit Answer</button>
        <button class="btn btn-o" onclick="toggleExp()">📘 Explanation</button>
        <button class="btn btn-o" onclick="requireLogin()">🔖 Save</button>
      </div>
      <div class="exp-box" id="mcqExpBox"><div style="font-size:10.5px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--forest2);margin-bottom:7px;">📘 Explanation</div><div id="mcqExpTxt" style="font-size:14px;line-height:1.8;color:var(--text2);"></div></div>
      <div class="d-nav">
        <button class="btn btn-o" id="mcqPrevBtn" onclick="mcqPrev()">‹ Previous</button>
        <span id="mcqProgress" style="font-size:13px;color:var(--text3);">Q.1 of 10</span>
        <button class="btn btn-p" id="mcqNext2Btn" onclick="mcqNext()">Next ›</button>
      </div>
      <div class="discuss">
        <h4>💬 Discussion</h4>
        <textarea class="cmt-box" placeholder="Login to join the discussion…" onclick="requireLogin()"></textarea>
        <div style="display:flex;justify-content:flex-end;margin-top:8px;"><button class="btn btn-p" onclick="requireLogin()">Post Comment</button></div>
      </div>
    </div>
  </div>
</div>

<!-- ░░ BLOG PAGE ░░ -->
<div class="page" id="page-blog">
  <div class="pg-header"><div class="container"><h2>✍️ Blog &amp; Articles</h2><p>Study tips, career guidance, exam strategies, latest news</p></div></div>
  <div class="container" style="padding-top:28px;padding-bottom:44px;">
    <div class="blog-grid" id="blogGrid"></div>
  </div>
</div>

<!-- ░░ BLOG POST ░░ -->
<div class="page" id="page-blogpost">
  <div style="background:var(--bg2);border-bottom:1px solid var(--border);padding:9px 24px;font-size:13px;" id="postBread"></div>
  <div style="max-width:800px;margin:28px auto;padding:0 24px 48px;">
    <div style="background:var(--white);border-radius:20px;border:1.5px solid var(--border);overflow:hidden;box-shadow:var(--sh);">
      <div id="postThumb" style="height:220px;display:flex;align-items:center;justify-content:center;font-size:72px;"></div>
      <div style="padding:30px;">
        <span class="blog-tag" id="postTag">Category</span>
        <div style="font-family:'Playfair Display',serif;font-size:28px;font-weight:900;color:var(--forest);margin:10px 0 9px;" id="postTitle">Title</div>
        <div style="font-size:12.5px;color:var(--text3);margin-bottom:20px;padding-bottom:18px;border-bottom:1.5px solid var(--border);" id="postMeta">Author · Date</div>
        <div id="postContent" style="font-size:14.5px;line-height:1.85;color:var(--text2);"></div>
        <div style="margin-top:28px;border-top:1.5px solid var(--border);padding-top:18px;display:flex;justify-content:flex-end;">
          <button class="btn btn-o" onclick="go('blog')">← Back to Blog</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ░░ INTERVIEW ░░ -->
<div class="page" id="page-interview">
  <div class="pg-header"><div class="container"><h2>💼 Interview Preparation</h2><p>Common interview questions with expert model answers</p></div></div>
  <div class="container" style="padding-top:28px;padding-bottom:44px;max-width:840px;">
    <div class="int-card"><div class="int-icon">🤝</div><div style="flex:1;"><div style="font-size:14px;font-weight:700;color:var(--forest);margin-bottom:3px;">Tell me about yourself?</div><div style="font-size:12px;color:var(--text3);">Most Asked · HR Interview</div></div><div class="int-arr">›</div></div>
    <div class="int-card"><div class="int-icon">💡</div><div style="flex:1;"><div style="font-size:14px;font-weight:700;color:var(--forest);margin-bottom:3px;">What are your strengths and weaknesses?</div><div style="font-size:12px;color:var(--text3);">Behavioral</div></div><div class="int-arr">›</div></div>
    <div class="int-card"><div class="int-icon">🎯</div><div style="flex:1;"><div style="font-size:14px;font-weight:700;color:var(--forest);margin-bottom:3px;">Where do you see yourself in 5 years?</div><div style="font-size:12px;color:var(--text3);">Career Goals</div></div><div class="int-arr">›</div></div>
    <div class="int-card"><div class="int-icon">🏆</div><div style="flex:1;"><div style="font-size:14px;font-weight:700;color:var(--forest);margin-bottom:3px;">Why should we hire you?</div><div style="font-size:12px;color:var(--text3);">Most Critical</div></div><div class="int-arr">›</div></div>
    <div class="int-card"><div class="int-icon">📊</div><div style="flex:1;"><div style="font-size:14px;font-weight:700;color:var(--forest);margin-bottom:3px;">Describe a challenging situation you overcame.</div><div style="font-size:12px;color:var(--text3);">Problem Solving</div></div><div class="int-arr">›</div></div>
  </div>
</div>

<!-- ░░ ASK ░░ -->
<div class="page" id="page-ask">
  <div class="pg-header"><div class="container"><h2>❓ Ask a Question</h2><p>Post your question and get expert answers via WhatsApp</p></div></div>
  <div style="max-width:840px;margin:32px auto;padding:0 24px 48px;">

    <!-- Info banner -->
    <div style="background:linear-gradient(135deg,rgba(34,201,123,.12),rgba(13,59,46,.08));border:1.5px solid rgba(34,201,123,.3);border-radius:14px;padding:14px 20px;margin-bottom:22px;display:flex;align-items:center;gap:12px;">
      <span style="font-size:26px;">📲</span>
      <div>
        <div style="font-size:14px;font-weight:700;color:var(--forest);">WhatsApp Number Zaruri Hai!</div>
        <div style="font-size:13px;color:var(--text2);margin-top:2px;">Aapka WhatsApp number dena zaroori hai — bina number ke question submit nahi hoga. Hum aapko direct answer bhejenge.</div>
      </div>
    </div>

    <div style="background:var(--white);border-radius:20px;border:1.5px solid var(--border);padding:32px;box-shadow:var(--sh);">
      <div style="font-family:'Playfair Display',serif;font-size:22px;color:var(--forest);font-weight:800;margin-bottom:24px;">Post Your Question</div>

      <!-- Row 1: Name + Category -->
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
        <div>
          <label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:6px;">Your Name *</label>
          <input type="text" id="askName" style="width:100%;padding:11px 14px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;transition:.2s;" placeholder="Full name" onfocus="this.style.borderColor='var(--em)'" onblur="this.style.borderColor='var(--border)'">
          <div id="askNameErr" style="font-size:11.5px;color:var(--coral);margin-top:4px;display:none;">⚠️ Name darj karein</div>
        </div>
        <div>
          <label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:6px;">Category</label>
          <select style="width:100%;padding:11px 14px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;" id="askCatSel">
            <option value="">Select…</option>
          </select>
        </div>
      </div>

      <!-- WhatsApp Number — MANDATORY -->
      <div style="margin-top:14px;">
        <label style="font-size:12.5px;font-weight:700;color:var(--text2);display:flex;align-items:center;gap:6px;margin-bottom:6px;">
          <span style="background:#25D366;color:white;padding:2px 8px;border-radius:20px;font-size:11px;font-weight:700;">LAZMI / REQUIRED</span>
          📲 WhatsApp Number *
        </label>
        <div style="position:relative;">
          <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);font-size:14px;font-weight:700;color:var(--text3);">+92</span>
          <input type="tel" id="askWhatsapp" style="width:100%;padding:11px 14px 11px 48px;background:var(--bg);border:2px solid #25D366;border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;transition:.2s;" placeholder="3XX XXXXXXX" maxlength="11" onfocus="this.style.borderColor='#128C7E'" onblur="this.style.borderColor='#25D366'">
        </div>
        <div id="askWaErr" style="font-size:11.5px;color:var(--coral);margin-top:4px;display:none;">⚠️ Valid WhatsApp number darj karein (10-11 digits)</div>
        <div style="font-size:11.5px;color:var(--text3);margin-top:4px;">📌 Sirf Pakistan number — e.g. 03001234567</div>
      </div>

      <!-- Question -->
      <div style="margin-top:14px;">
        <label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:6px;">Aapka Sawal / Your Question *</label>
        <input type="text" id="askQuestion" style="width:100%;padding:11px 14px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;transition:.2s;" placeholder="Apna sawal yahan likhein…" onfocus="this.style.borderColor='var(--em)'" onblur="this.style.borderColor='var(--border)'">
        <div id="askQErr" style="font-size:11.5px;color:var(--coral);margin-top:4px;display:none;">⚠️ Sawal zaroor likhein</div>
      </div>

      <!-- Details -->
      <div style="margin-top:14px;">
        <label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:6px;">Mazeed Details (Ikhtiari / Optional)</label>
        <textarea id="askDetails" style="width:100%;padding:11px 14px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;resize:vertical;min-height:90px;transition:.2s;" placeholder="Apne sawal ki mazeed wazahat karein…" onfocus="this.style.borderColor='var(--em)'" onblur="this.style.borderColor='var(--border)'"></textarea>
      </div>

      <div style="display:flex;gap:10px;justify-content:flex-end;margin-top:22px;">
        <button class="btn btn-p" style="padding:12px 32px;font-size:15px;" onclick="submitAskQuestion()">📲 Post Question</button>
      </div>
    </div>

    <div id="askPostedList" style="margin-top:24px;"></div>
  </div>
</div>
<!-- ░░░░ ADMIN PANEL ░░░░ -->
<div class="page" id="page-admin">
<div class="adm" id="admRoot">
<div class="adm-wrap">

<!-- LOCK -->
<div id="admLock">
<div class="adm-lock">
<div class="lock-box">
  <div class="lock-shield">🛡️</div>
  <div class="lock-title">Admin Panel</div>
  <div class="lock-sub">Enter password to access Vokomoon Admin</div>
  <div class="lock-err" id="lockErr">❌ Wrong password. Try again.</div>
  <div style="position: relative;">
        <input 
          type="password" 
          class="lock-inp" 
          id="lockInp" 
          placeholder="Enter password…" 
          onkeydown="if(event.key==='Enter')doAdmLogin()"
        >
        
        <!-- Toggle button -->
        <span 
          onclick="togglePassword()" 
          style="position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer;"
        >
          👁️
        </span>
      </div>
  <button class="lock-btn" onclick="doAdmLogin()">🔓 Access Admin Panel</button>
</div>
</div>
</div>

<!-- DASHBOARD -->
<div id="admDash" style="display:none;">
<div class="adm-layout">

<!-- SIDEBAR -->
<div class="adm-sb">
  <div class="sb-logo">
    <div class="sb-logo-icon"><svg viewBox="0 0 24 24" stroke="white" stroke-width="2.2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
    <div><div class="sb-logo-name">Voko<span>moon</span></div><div class="sb-logo-sub">Admin Panel</div></div>
  </div>
  <div class="sb-sec">
    <div class="sb-sec-lbl">Overview</div>
    <div class="sb-item active" onclick="admTab('dashboard',this)"><div class="sb-icon">📊</div>Dashboard</div>
  </div>
  <div class="sb-sec">
    <div class="sb-sec-lbl">Content</div>
    <div class="sb-item" onclick="admTab('mcqCreate',this)"><div class="sb-icon">✏️</div>Create MCQs</div>
    <div class="sb-item" onclick="admTab('mcqManage',this)"><div class="sb-icon">📋</div>Manage MCQs<div class="sb-badge" id="sbMcqBadge">0</div></div>
    <div class="sb-item" onclick="admTab('setPublish',this)"><div class="sb-icon">📦</div>Set Publish<div class="sb-badge new">NEW</div></div>
    <div class="sb-item" onclick="admTab('article',this)"><div class="sb-icon">📰</div>Publish Article<div class="sb-badge new">NEW</div></div>
    <div class="sb-item" onclick="admTab('pdf',this)"><div class="sb-icon">📄</div>Publish PDF</div>
    <div class="sb-item" onclick="admTab('video',this)"><div class="sb-icon">🎥</div>Video Classes</div>
    <div class="sb-item" onclick="admTab('notes',this)"><div class="sb-icon">📓</div>Publish Notes</div>
    <div class="sb-item" onclick="admTab('questions',this)"><div class="sb-icon">❓</div>Asked Questions<div class="sb-badge" id="sbQBadge">0</div></div>
  </div>
  <div class="sb-sec">
    <div class="sb-sec-lbl">Management</div>
    <div class="sb-item" onclick="admTab('allContent',this)"><div class="sb-icon">🗂️</div>All Content</div>
    <div class="sb-item" onclick="admTab('categories',this)"><div class="sb-icon">🏷️</div>Categories</div>
    <div class="sb-item" onclick="admTab('users',this)"><div class="sb-icon">👥</div>Users<div class="sb-badge" id="sbUserBadge">0</div></div>
    <div class="sb-item" onclick="admTab('settings',this)"><div class="sb-icon">⚙️</div>Settings</div>
  </div>
  <div class="sb-user">
    <div class="sb-av">A</div>
    <div><div class="sb-name">Ateaq</div><div class="sb-role">Administrator</div></div>
    <button class="sb-logout" onclick="doAdmLogout()" title="Logout">⬅️</button>
  </div>
</div>

<!-- RIGHT -->
<div class="adm-right">
<div class="adm-topbar">
  <div class="adm-topbar-title" id="admTitle">📊 Dashboard</div>
  <div class="adm-topbar-r">
    <div class="adm-search"><svg width="13" height="13" viewBox="0 0 24 24" stroke="var(--ad)" stroke-width="2.5" fill="none"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><input type="text" placeholder="Search…"></div>
    <button class="mode-btn" onclick="toggleMode()" id="modeBtn"><span id="modeIcon">🌙</span> <span id="modeLbl">Dark</span></button>
    <div class="notif-btn">🔔<div class="notif-dot"></div></div>
    <div class="sb-av" style="width:34px;height:34px;border-radius:8px;font-size:13px;">A</div>
  </div>
</div>
<div class="adm-content">

<!-- DASHBOARD TAB -->
<div class="adm-tab active" id="admt-dashboard">
  <div style="margin-bottom:20px;"><div style="font-size:22px;font-weight:800;color:var(--at);font-family:'Playfair Display',serif;">Welcome back, Ateaq! 👋</div><div style="font-size:13px;color:var(--ad);margin-top:3px;">Vokomoon platform overview — all stats are real-time.</div></div>
  <div class="stat-grid">
    <div class="stat-card" style="border-top:3px solid var(--aa);"><span class="sc-icon">❓</span><span class="sc-num" id="stMcq">0</span><div class="sc-lbl">Total MCQs</div><div class="sc-chg">↑ Growing</div></div>
    <div class="stat-card" style="border-top:3px solid #4a9ef5;"><span class="sc-icon">📰</span><span class="sc-num" id="stArt">0</span><div class="sc-lbl">Articles</div><div class="sc-chg">↑ New</div></div>
    <div class="stat-card" style="border-top:3px solid var(--ag);"><span class="sc-icon">👥</span><span class="sc-num" id="stUsers">0</span><div class="sc-lbl">Users</div><div class="sc-chg">↑ Today</div></div>
    <div class="stat-card" style="border-top:3px solid var(--coral);"><span class="sc-icon">🏷️</span><span class="sc-num" id="stCats">10</span><div class="sc-lbl">Categories</div><div class="sc-chg">Active</div></div>
  </div>
  <div class="adm-2col">
    <div class="adm-card">
      <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:3px;">
        <div class="adm-card-title">⚡ Live Activity Feed <span class="act-count" id="actCount">0</span></div>
        <button onclick="clearAct()" style="font-size:11px;font-weight:700;color:var(--ad);background:none;border:1px solid var(--abr);padding:3px 10px;border-radius:20px;cursor:pointer;">Clear</button>
      </div>
      <div class="adm-card-sub">Every admin action logged with real timestamp</div>
      <div id="actFeed"><div class="act-empty" id="actEmpty"><span class="act-empty-icon">📋</span><div style="font-size:13px;font-weight:600;">No activity yet</div><div style="font-size:12px;margin-top:3px;opacity:.7;">Actions appear here in real time</div></div></div>
    </div>
    <div class="adm-card">
      <div class="adm-card-title">🚀 Quick Actions</div>
      <div class="adm-card-sub">Jump to common tasks</div>
      <div class="qa-grid">
        <div class="qa-btn" onclick="admTabGo('mcqCreate')"><span class="qa-btn-icon">✏️</span><div class="qa-btn-label">Create MCQ</div></div>
        <div class="qa-btn" onclick="admTabGo('article')"><span class="qa-btn-icon">📰</span><div class="qa-btn-label">Write Article</div></div>
        <div class="qa-btn" onclick="admTabGo('pdf')"><span class="qa-btn-icon">📄</span><div class="qa-btn-label">Publish PDF</div></div>
        <div class="qa-btn" onclick="admTabGo('categories')"><span class="qa-btn-icon">🏷️</span><div class="qa-btn-label">Add Category</div></div>
      </div>
      <div style="margin-top:18px;"><div style="font-size:11px;font-weight:700;color:var(--ad);text-transform:uppercase;letter-spacing:.8px;margin-bottom:10px;">Content Stats</div><div id="contentBars"></div></div>
    </div>
  </div>
</div>

<!-- CREATE MCQ TAB -->
<div class="adm-tab" id="admt-mcqCreate">
  <div class="adm-pg-title">✏️ Create MCQs</div>
  <div class="adm-pg-sub">Create multiple MCQs at once. All publish to website and homepage instantly.</div>

  <!-- PUBLISH TARGET SELECTOR -->
  <div class="adm-form" style="margin-bottom:18px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.25);">
    <div style="font-size:13px;font-weight:800;color:var(--aa);margin-bottom:14px;display:flex;align-items:center;gap:8px;">📍 Publish Target — Sirf Ek Select Karein</div>
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:14px;">
      <!-- Option 1: Main Category -->
      <div id="ptBox1" class="pt-box pt-active" onclick="selectPT(1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;">
        <div style="font-size:13px;font-weight:800;color:var(--aa);margin-bottom:10px;">① Main Category</div>
        <select class="adm-sel" id="pt1Cat" onclick="event.stopPropagation()">
          <option value="">Select Main Category…</option>
        </select>
      </div>
      <!-- Option 2: Sub Category -->
      <div id="ptBox2" class="pt-box" onclick="selectPT(2)" style="border:2px solid var(--abr);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;opacity:.55;">
        <div style="font-size:13px;font-weight:800;color:var(--at);margin-bottom:10px;">② Sub Category</div>
        <select class="adm-sel" id="pt2Main" onclick="event.stopPropagation()" onchange="loadPT2Subs()" style="margin-bottom:8px;">
          <option value="">Select Main Category…</option>
        </select>
        <select class="adm-sel" id="pt2Sub" onclick="event.stopPropagation()">
          <option value="">— Pehle Main Select Karein —</option>
        </select>
      </div>
      <!-- Option 3: Sub-Sub Category -->
      <div id="ptBox3" class="pt-box" onclick="selectPT(3)" style="border:2px solid var(--abr);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;opacity:.55;">
        <div style="font-size:13px;font-weight:800;color:var(--at);margin-bottom:10px;">③ Sub-Sub Category</div>
        <select class="adm-sel" id="pt3Main" onclick="event.stopPropagation()" onchange="loadPT3Subs()" style="margin-bottom:8px;">
          <option value="">Select Main Category…</option>
        </select>
        <select class="adm-sel" id="pt3Sub" onclick="event.stopPropagation()" onchange="loadPT3SSC()" style="margin-bottom:8px;">
          <option value="">— Pehle Main Select Karein —</option>
        </select>
        <select class="adm-sel" id="pt3SSC" onclick="event.stopPropagation()">
          <option value="">— Pehle Sub Select Karein —</option>
        </select>
      </div>
    </div>
  </div>

  <div id="mcqBlocks">
    <div class="mcq-blk" id="mcqBlk1">
      <div class="mcq-blk-head"><div class="mcq-blk-num">Question #1</div><button class="ab ab-d" id="mcqRem1" style="display:none;" onclick="remMcqBlk(1)">✕ Remove</button></div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
        <div class="adm-f" style="margin-bottom:0;"><label>Difficulty</label><select class="adm-sel" id="mcqDiff1"><option>Easy</option><option>Medium</option><option>Hard</option></select></div>
        <div class="adm-f" style="margin-bottom:0;"><label>Set #</label><input type="number" class="adm-inp" id="mcqSet1" placeholder="e.g. 1" min="1" value="1"></div>
      </div>
      <div class="adm-f"><label>Question Text *</label>
        <div class="ed-toolbar" style="margin-bottom:0;border-radius:8px 8px 0 0;">
          <button class="ed-btn" onclick="expCmd('q1','bold')"><b>B</b></button>
          <button class="ed-btn" onclick="expCmd('q1','italic')"><i>I</i></button>
          <button class="ed-btn" onclick="expCmd('q1','underline')"><u>U</u></button>
          <div class="ed-sep"></div>
          <button class="ed-btn" onclick="expCmd('q1','insertUnorderedList')">• List</button>
          <button class="ed-btn" onclick="expCmd('q1','insertOrderedList')">1. List</button>
          <div class="ed-sep"></div>
          <button class="ed-btn" onclick="expCmd('q1','undo')">↩</button>
          <button class="ed-btn" onclick="expCmd('q1','redo')">↪</button>
        </div>
        <div class="ed-area" id="mcqQ1" contenteditable="true" spellcheck="true" style="min-height:70px;border-radius:0 0 8px 8px;" placeholder="Write your MCQ question here…"></div>
      </div>
      <div class="adm-f">
        <label>Answer Options * <span style="font-weight:400;opacity:.6;">(⭕ Radio = correct answer)</span></label>
        <div id="mcqOpts1">
          <div class="opt-row"><div class="opt-let">A</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option A…"><input type="radio" name="mcqCorr1" class="opt-radio" checked></div>
          <div class="opt-row"><div class="opt-let">B</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option B…"><input type="radio" name="mcqCorr1" class="opt-radio"></div>
          <div class="opt-row"><div class="opt-let">C</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option C…"><input type="radio" name="mcqCorr1" class="opt-radio"></div>
          <div class="opt-row"><div class="opt-let">D</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option D…"><input type="radio" name="mcqCorr1" class="opt-radio"></div>
        </div>
        <div class="add-opt" onclick="addOpt(1)">＋ Add Option (max 5)</div>
      </div>
      <!-- RICH EDITOR FOR EXPLANATION -->
      <div class="adm-f" style="margin-bottom:0;">
        <label>Explanation (Optional) — Rich Editor</label>
        <div class="ed-toolbar" style="margin-bottom:0;border-radius:8px 8px 0 0;">
          <button class="ed-btn" onclick="expCmd(1,'formatBlock','<h3>')" style="font-weight:800;">H3</button>
          <button class="ed-btn" onclick="expCmd(1,'formatBlock','<p>')">¶</button>
          <div class="ed-sep"></div>
          <button class="ed-btn" onclick="expCmd(1,'bold')"><b>B</b></button>
          <button class="ed-btn" onclick="expCmd(1,'italic')"><i>I</i></button>
          <button class="ed-btn" onclick="expCmd(1,'underline')"><u>U</u></button>
          <div class="ed-sep"></div>
          <button class="ed-btn" onclick="expCmd(1,'insertUnorderedList')">• List</button>
          <button class="ed-btn" onclick="expCmd(1,'insertOrderedList')">1. List</button>
          <div class="ed-sep"></div>
          <button class="ed-btn" onclick="insertTableInExp(1)">📊 Table</button>
          <button class="ed-btn" onclick="applyTextColorToExp(1)">🎨 Color</button>
          <button class="ed-btn" onclick="expCmd(1,'undo')">↩</button>
          <button class="ed-btn" onclick="expCmd(1,'redo')">↪</button>
        </div>
        <div class="ed-area" id="mcqExp1" contenteditable="true" spellcheck="true" style="min-height:90px;border-radius:0 0 8px 8px;" placeholder="Explain the correct answer…"></div>
      </div>
      <div class="adm-f" style="margin-top:10px;margin-bottom:0;padding:10px 12px;background:rgba(245,200,66,.07);border:1px solid rgba(245,200,66,.2);border-radius:9px;">
        <label style="margin-bottom:5px;color:var(--ag);">⏰ Schedule (Optional — blank = publish now)</label>
        <input type="datetime-local" class="adm-inp sched-inp" id="mcqSched1" style="width:auto;">
      </div>
      <div style="margin-top:12px;">
        <button class="ab ab-p" style="width:100%;padding:11px;font-size:14px;justify-content:center;" onclick="publishSingleMcqFirst()">🚀 Publish Question #1</button>
      </div>
    </div>
  </div>
  <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-top:14px;">
    <button class="ab" style="background:rgba(34,201,123,.1);border:1px solid rgba(34,201,123,.25);color:var(--aa);" onclick="addMcqBlk()">＋ Add Another Question</button>
    <div style="display:flex;gap:9px;">
      <button class="ab ab-o" onclick="toast('💾 Saved as Draft!','i')">💾 Save Draft</button>
      <button class="ab ab-p" onclick="publishMcqs()">🚀 Publish All MCQs to Website</button>
    </div>
  </div>
</div>

<!-- MANAGE MCQs TAB -->
<div class="adm-tab" id="admt-mcqManage">
  <div class="adm-pg-title">📋 Manage MCQs</div>
  <div class="adm-pg-sub">View, edit or delete published MCQs.</div>
  <div class="adm-tbl-wrap">
    <div class="adm-tbl-head">
      <div class="adm-tbl-title">All MCQs</div>
      <div class="adm-tbl-actions">
        <select class="adm-sel dyn-cat" id="manCatFilter" style="width:auto;padding:6px 11px;font-size:12px;" onchange="renderMcqTable()"><option value="">All Categories</option></select>
      </div>
    </div>
    <div style="overflow-x:auto;"><table class="adm-table"><thead><tr><th>#</th><th>Question</th><th>Category</th><th>Difficulty</th><th>Status</th><th>Schedule</th><th>Actions</th></tr></thead><tbody id="mcqTableBody"><tr><td colspan="7" style="text-align:center;padding:24px;color:var(--ad);">No MCQs yet. Create some above!</td></tr></tbody></table></div>
    <div class="tbl-pag"><span id="mcqTableInfo">0 MCQs</span></div>
  </div>
</div>

<!-- ARTICLE TAB -->
<div class="adm-tab" id="admt-article">
  <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-bottom:20px;">
    <div><div class="adm-pg-title">📰 Publish Article</div><div class="adm-pg-sub">Full rich-text editor. Publishes to Blog page and Homepage instantly.</div></div>
    <div style="display:flex;gap:9px;"><button class="ab ab-o" onclick="saveArtDraft()">💾 Draft</button><button class="ab ab-p" onclick="publishArt()">🚀 Publish Article</button></div>
  </div>
  <div style="display:grid;grid-template-columns:1fr 295px;gap:18px;align-items:start;">
    <div>
      <div class="adm-form">
        <div class="adm-f"><label>Article Title *</label><input type="text" class="adm-inp" id="artTitle" placeholder="Write a compelling title…" style="font-size:16px;font-weight:700;padding:12px 14px;" oninput="updateSlug()"></div>
        <div class="adm-f"><label>Short Excerpt</label><textarea class="adm-inp" id="artExcerpt" placeholder="Brief summary shown on blog cards…" style="min-height:55px;"></textarea></div>
        <div class="adm-f" style="margin-bottom:0;"><label>Article Content *</label>
          <div class="ed-toolbar">
            <button class="ed-btn" onclick="execCmd('formatBlock','<h1>')" style="font-weight:900;">H1</button>
            <button class="ed-btn" onclick="execCmd('formatBlock','<h2>')" style="font-weight:800;">H2</button>
            <button class="ed-btn" onclick="execCmd('formatBlock','<h3>')">H3</button>
            <button class="ed-btn" onclick="execCmd('formatBlock','<p>')">¶</button>
            <div class="ed-sep"></div>
            <button class="ed-btn" onclick="execCmd('bold')" style="font-weight:900;"><b>B</b></button>
            <button class="ed-btn" onclick="execCmd('italic')"><i>I</i></button>
            <button class="ed-btn" onclick="execCmd('underline')"><u>U</u></button>
            <button class="ed-btn" onclick="execCmd('strikeThrough')"><s>S</s></button>
            <div class="ed-sep"></div>
            <button class="ed-btn" onclick="execCmd('insertUnorderedList')">• List</button>
            <button class="ed-btn" onclick="execCmd('insertOrderedList')">1. List</button>
            <button class="ed-btn" onclick="execCmd('formatBlock','<blockquote>')">❝</button>
            <div class="ed-sep"></div>
            <button class="ed-btn" onclick="execCmd('justifyLeft')">⬅</button>
            <button class="ed-btn" onclick="execCmd('justifyCenter')">☰</button>
            <button class="ed-btn" onclick="execCmd('justifyRight')">➡</button>
            <div class="ed-sep"></div>
            <button class="ed-btn" onclick="openLinkMod()">🔗 Link</button>
            <button class="ed-btn" onclick="openImgMod()">🖼️ Image</button>
            <div class="ed-sep"></div>
            <button class="ed-btn" onclick="execCmd('undo')">↩</button>
            <button class="ed-btn" onclick="execCmd('redo')">↪</button>
            <button class="ed-btn" onclick="execCmd('removeFormat')">✕Fmt</button>
          </div>
          <div class="ed-area" id="artEditor" contenteditable="true" spellcheck="true"></div>
        </div>
      </div>
    </div>
    <div>
      <div class="adm-form">
        <div style="font-size:13px;font-weight:700;color:var(--at);margin-bottom:14px;">📋 Article Settings</div>
        <!-- Publish Target for Article -->
        <div style="margin-bottom:14px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.22);border-radius:10px;padding:12px;">
          <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:10px;">📍 Kahan Publish Karein — Sirf Ek</div>
          <div style="display:flex;flex-direction:column;gap:7px;">
            <div id="artPTBox1" class="pt-box pt-active" onclick="selectGenPT('art',1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:8px;padding:8px;cursor:pointer;">
              <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:6px;">① Main Category</div>
              <select class="adm-sel" id="artPT1Cat" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">Select…</option></select>
            </div>
            <div id="artPTBox2" class="pt-box" onclick="selectGenPT('art',2)" style="border:2px solid var(--abr);border-radius:8px;padding:8px;cursor:pointer;opacity:.55;">
              <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:6px;">② Sub Category</div>
              <select class="adm-sel" id="artPT2Main" onclick="event.stopPropagation()" onchange="loadGenPTSubs('art',2)" style="font-size:12px;margin-bottom:5px;"><option value="">Select Main…</option></select>
              <select class="adm-sel" id="artPT2Sub" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Main —</option></select>
            </div>
            <div id="artPTBox3" class="pt-box" onclick="selectGenPT('art',3)" style="border:2px solid var(--abr);border-radius:8px;padding:8px;cursor:pointer;opacity:.55;">
              <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:6px;">③ Sub-Sub</div>
              <select class="adm-sel" id="artPT3Main" onclick="event.stopPropagation()" onchange="loadGenPTSSCMains('art')" style="font-size:12px;margin-bottom:5px;"><option value="">Select Main…</option></select>
              <select class="adm-sel" id="artPT3Sub" onclick="event.stopPropagation()" onchange="loadGenPTSSC('art')" style="font-size:12px;margin-bottom:5px;"><option value="">— Pehle Main —</option></select>
              <select class="adm-sel" id="artPT3SSC" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Sub —</option></select>
            </div>
          </div>
        </div>
        <div class="adm-f"><label>Article Image (Select from Computer)</label>
          <div class="upload-area" onclick="document.getElementById('artImgFile').click()" style="padding:12px;">
            <input type="file" id="artImgFile" accept="image/*" onchange="handleArtImg(this)" style="display:none;">
            <div id="artImgPreviewWrap" style="display:none;margin-bottom:8px;"><img id="artImgPreview" style="max-width:100%;max-height:100px;border-radius:6px;display:block;margin:0 auto;"></div>
            <div style="font-size:24px;margin-bottom:5px;">🖼️</div>
            <div style="font-size:12px;font-weight:700;color:var(--at);" id="artImgName">Click to Select Image</div>
            <div style="font-size:11px;color:var(--ad);margin-top:3px;">JPG, PNG, WebP</div>
          </div>
        </div>
        <div class="adm-f"><label>Author</label><input type="text" class="adm-inp" id="artAuthor" value="Vokomoon Admin"></div>
        <div class="adm-f"><label>Featured Emoji / Color</label><input type="text" class="adm-inp" id="artEmoji" placeholder="e.g. 📝 or leave blank"></div>
        <div class="adm-f"><label>⏰ Schedule (blank = now)</label><input type="datetime-local" class="adm-inp" id="artSched"></div>
        <div class="adm-f"><label>URL Slug</label><input type="text" class="adm-inp" id="artSlug" placeholder="my-article-url"></div>
        <div class="slug-preview">Vokomoon.com/blog/<span id="slugPrev">my-article-url</span></div>
        <div style="display:flex;flex-direction:column;gap:8px;margin-top:16px;">
          <button class="ab ab-o" style="width:100%;justify-content:center;" onclick="saveArtDraft()">💾 Save Draft</button>
          <button class="ab ab-p" style="width:100%;justify-content:center;padding:11px;" onclick="publishArt()">🚀 Publish Now</button>
        </div>
      </div>
    </div>
  </div>
  <div style="margin-top:22px;">
    <div style="font-size:17px;font-weight:700;color:var(--at);margin-bottom:14px;">📚 Published Articles (<span id="artCount">0</span>)</div>
    <div id="artList"><div class="pub-empty">No articles yet. Write your first article above! 📰</div></div>
  </div>
</div>

<!-- PDF TAB -->
<div class="adm-tab" id="admt-pdf">
  <div class="adm-pg-title">📄 Publish PDF</div>
  <div class="adm-pg-sub">Upload PDFs. Appears on website instantly after publishing.</div>
  <div class="adm-form">
    <div style="margin-bottom:16px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.22);border-radius:12px;padding:14px;">
      <div style="font-size:12px;font-weight:800;color:var(--aa);margin-bottom:12px;">📍 Kahan Publish Karein — Sirf Ek Select Karein</div>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
        <div id="pdfPTBox1" class="pt-box pt-active" onclick="selectGenPT('pdf',1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:10px;padding:10px;cursor:pointer;">
          <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:8px;">① Main Category</div>
          <select class="adm-sel" id="pdfPT1Cat" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">Select…</option></select>
        </div>
        <div id="pdfPTBox2" class="pt-box" onclick="selectGenPT('pdf',2)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">② Sub Category</div>
          <select class="adm-sel" id="pdfPT2Main" onclick="event.stopPropagation()" onchange="loadGenPTSubs('pdf',2)" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="pdfPT2Sub" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Main —</option></select>
        </div>
        <div id="pdfPTBox3" class="pt-box" onclick="selectGenPT('pdf',3)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">③ Sub-Sub</div>
          <select class="adm-sel" id="pdfPT3Main" onclick="event.stopPropagation()" onchange="loadGenPTSSCMains('pdf')" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="pdfPT3Sub" onclick="event.stopPropagation()" onchange="loadGenPTSSC('pdf')" style="font-size:12px;margin-bottom:6px;"><option value="">— Pehle Main —</option></select>
          <select class="adm-sel" id="pdfPT3SSC" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Sub —</option></select>
        </div>
      </div>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
      <div class="adm-f"><label>PDF Title *</label><input type="text" class="adm-inp" id="pdfTitle" placeholder="e.g. PPSC English Past Papers 2024"></div>
    </div>
    <div class="adm-f"><label>Google Drive / PDF URL (Optional)</label><input type="url" class="adm-inp" id="pdfUrl" placeholder="https://drive.google.com/... ya direct PDF link"></div>
    <div class="adm-f"><label>Select PDF File</label>
      <div class="upload-area" onclick="document.getElementById('pdfFile').click()">
        <input type="file" id="pdfFile" accept=".pdf" onchange="showFile(this,'pdfFileName')">
        <div style="font-size:30px;margin-bottom:8px;">📄</div>
        <div style="font-size:13px;font-weight:700;color:var(--at);" id="pdfFileName">Click to Select PDF</div>
        <div style="font-size:12px;color:var(--ad);margin-top:4px;">Only .pdf files</div>
      </div>
    </div>
    <div class="adm-f"><label>Description</label><textarea class="adm-inp" id="pdfDesc" style="min-height:65px;" placeholder="Brief description…"></textarea></div>
    <div style="display:flex;justify-content:flex-end;"><button class="ab ab-p" onclick="publishContent('pdf')">🚀 Publish PDF to Website</button></div>
  </div>
  <div><div style="font-size:15px;font-weight:700;color:var(--at);margin-bottom:12px;">Published PDFs (<span id="pdfCount">0</span>)</div><div id="pdfList"><div class="pub-empty">No PDFs yet 📄</div></div></div>
</div>

<!-- VIDEO TAB -->
<div class="adm-tab" id="admt-video">
  <div class="adm-pg-title">🎥 Video Classes</div>
  <div class="adm-pg-sub">Publish video lessons. Appears on website instantly.</div>
  <div class="adm-form">
    <div style="margin-bottom:16px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.22);border-radius:12px;padding:14px;">
      <div style="font-size:12px;font-weight:800;color:var(--aa);margin-bottom:12px;">📍 Kahan Publish Karein — Sirf Ek Select Karein</div>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
        <div id="vidPTBox1" class="pt-box pt-active" onclick="selectGenPT('vid',1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:10px;padding:10px;cursor:pointer;">
          <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:8px;">① Main Category</div>
          <select class="adm-sel" id="vidPT1Cat" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">Select…</option></select>
        </div>
        <div id="vidPTBox2" class="pt-box" onclick="selectGenPT('vid',2)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">② Sub Category</div>
          <select class="adm-sel" id="vidPT2Main" onclick="event.stopPropagation()" onchange="loadGenPTSubs('vid',2)" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="vidPT2Sub" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Main —</option></select>
        </div>
        <div id="vidPTBox3" class="pt-box" onclick="selectGenPT('vid',3)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">③ Sub-Sub</div>
          <select class="adm-sel" id="vidPT3Main" onclick="event.stopPropagation()" onchange="loadGenPTSSCMains('vid')" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="vidPT3Sub" onclick="event.stopPropagation()" onchange="loadGenPTSSC('vid')" style="font-size:12px;margin-bottom:6px;"><option value="">— Pehle Main —</option></select>
          <select class="adm-sel" id="vidPT3SSC" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Sub —</option></select>
        </div>
      </div>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
      <div class="adm-f"><label>Video Title *</label><input type="text" class="adm-inp" id="vidTitle" placeholder="e.g. English Tenses Complete Lecture"></div>
    </div>
    <div class="adm-f"><label>YouTube / Video URL (Optional)</label><input type="url" class="adm-inp" id="vidUrl" placeholder="https://youtube.com/watch?v=... ya koi bhi video link"></div>
    <div class="adm-f"><label>Select Video File</label>
      <div class="upload-area" onclick="document.getElementById('vidFile').click()">
        <input type="file" id="vidFile" accept="video/*" onchange="showFile(this,'vidFileName')">
        <div style="font-size:30px;margin-bottom:8px;">🎥</div>
        <div style="font-size:13px;font-weight:700;color:var(--at);" id="vidFileName">Click to Select Video</div>
        <div style="font-size:12px;color:var(--ad);margin-top:4px;">MP4, AVI, MOV</div>
      </div>
    </div>
    <div class="adm-f"><label>Description</label><textarea class="adm-inp" id="vidDesc" style="min-height:65px;" placeholder="What this video covers…"></textarea></div>
    <div style="display:flex;justify-content:flex-end;"><button class="ab ab-p" onclick="publishContent('video')">🚀 Publish Video to Website</button></div>
  </div>
  <div><div style="font-size:15px;font-weight:700;color:var(--at);margin-bottom:12px;">Published Videos (<span id="vidCount">0</span>)</div><div id="vidList"><div class="pub-empty">No videos yet 🎥</div></div></div>
</div>

<!-- NOTES TAB -->
<div class="adm-tab" id="admt-notes">
  <div class="adm-pg-title">📓 Publish Notes</div>
  <div class="adm-pg-sub">Write or upload notes. Appears on website instantly.</div>
  <div class="adm-form">
    <div style="margin-bottom:16px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.22);border-radius:12px;padding:14px;">
      <div style="font-size:12px;font-weight:800;color:var(--aa);margin-bottom:12px;">📍 Kahan Publish Karein — Sirf Ek Select Karein</div>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
        <div id="notesPTBox1" class="pt-box pt-active" onclick="selectGenPT('notes',1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:10px;padding:10px;cursor:pointer;">
          <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:8px;">① Main Category</div>
          <select class="adm-sel" id="notesPT1Cat" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">Select…</option></select>
        </div>
        <div id="notesPTBox2" class="pt-box" onclick="selectGenPT('notes',2)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">② Sub Category</div>
          <select class="adm-sel" id="notesPT2Main" onclick="event.stopPropagation()" onchange="loadGenPTSubs('notes',2)" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="notesPT2Sub" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Main —</option></select>
        </div>
        <div id="notesPTBox3" class="pt-box" onclick="selectGenPT('notes',3)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">③ Sub-Sub</div>
          <select class="adm-sel" id="notesPT3Main" onclick="event.stopPropagation()" onchange="loadGenPTSSCMains('notes')" style="font-size:12px;margin-bottom:6px;"><option value="">Select Main…</option></select>
          <select class="adm-sel" id="notesPT3Sub" onclick="event.stopPropagation()" onchange="loadGenPTSSC('notes')" style="font-size:12px;margin-bottom:6px;"><option value="">— Pehle Main —</option></select>
          <select class="adm-sel" id="notesPT3SSC" onclick="event.stopPropagation()" style="font-size:12px;"><option value="">— Pehle Sub —</option></select>
        </div>
      </div>
    </div>
    <div class="note-tabs">
      <div class="note-tab active" id="nt1" onclick="noteTab(1)">✍️ Write Notes</div>
      <div class="note-tab" id="nt2" onclick="noteTab(2)">📁 Upload File</div>
    </div>
    <div id="noteWriteDiv">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
        <div class="adm-f"><label>Title *</label><input type="text" class="adm-inp" id="notesTitle" placeholder="e.g. English Tenses Notes"></div>
      </div>
      <div class="adm-f"><label>Notes Content *</label><textarea class="adm-inp" id="notesContent" style="min-height:180px;" placeholder="Write notes here…"></textarea></div>
      <div style="display:flex;justify-content:flex-end;"><button class="ab ab-p" onclick="publishContent('notes')">🚀 Publish Notes</button></div>
    </div>
    <div id="noteUpDiv" style="display:none;">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
        <div class="adm-f"><label>Title *</label><input type="text" class="adm-inp" id="notesFileTitle" placeholder="Notes title…"></div>
      </div>
      <div class="adm-f"><label>File</label>
        <div class="upload-area" onclick="document.getElementById('notesFile').click()">
          <input type="file" id="notesFile" accept=".pdf,.doc,.docx,.txt" onchange="showFile(this,'notesFileName')">
          <div style="font-size:30px;margin-bottom:8px;">📁</div>
          <div style="font-size:13px;font-weight:700;color:var(--at);" id="notesFileName">Select Notes File</div>
        </div>
      </div>
      <div style="display:flex;justify-content:flex-end;"><button class="ab ab-p" onclick="publishContent('notes')">🚀 Publish Notes</button></div>
    </div>
  </div>
  <div><div style="font-size:15px;font-weight:700;color:var(--at);margin-bottom:12px;">Published Notes (<span id="notesCount">0</span>)</div><div id="notesList"><div class="pub-empty">No notes yet 📓</div></div></div>
</div>

<!-- ALL CONTENT TAB -->
<div class="adm-tab" id="admt-allContent">
  <div class="adm-pg-title">🗂️ All Content</div>
  <div class="adm-pg-sub">Everything published on Vokomoon website.</div>
  <div style="display:flex;gap:8px;margin-bottom:16px;flex-wrap:wrap;">
    <button class="ab ab-p" id="cf-all" onclick="filterContent('all')">All</button>
    <button class="ab ab-o" id="cf-mcq" onclick="filterContent('mcq')">MCQs</button>
    <button class="ab ab-o" id="cf-article" onclick="filterContent('article')">Articles</button>
    <button class="ab ab-o" id="cf-pdf" onclick="filterContent('pdf')">PDFs</button>
    <button class="ab ab-o" id="cf-video" onclick="filterContent('video')">Videos</button>
    <button class="ab ab-o" id="cf-notes" onclick="filterContent('notes')">Notes</button>
  </div>
  <div id="allContentList"><div class="pub-empty">No content published yet.</div></div>
</div>

<!-- CATEGORIES TAB -->
<div class="adm-tab" id="admt-categories">
  <div class="adm-pg-title">🏷️ Categories</div>
  <div class="adm-pg-sub">Add categories — instantly updates homepage cards, nav bar, footer, and ALL dropdown selects.</div>
  <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:18px;margin-bottom:22px;">

    <!-- MAIN CATEGORY -->
    <div class="adm-form">
      <div class="adm-form-title">➕ Add Main Category</div>
      <div class="adm-form-sub">Shows on homepage + nav bar</div>
      <div class="adm-f"><label>Category Name *</label><input type="text" class="adm-inp" id="newCatName" placeholder="e.g. Economics, Urdu, Islamiat…"></div>
      <div class="adm-f"><label>Background Color</label><input type="color" class="adm-inp" id="newCatColor" value="#e8f5ee" style="height:42px;cursor:pointer;"></div>
      <div class="adm-f"><label>Show on Homepage?</label><select class="adm-sel" id="newCatShow"><option value="yes">✅ Yes — Show on homepage</option><option value="no">🔒 No — Hidden from homepage</option></select></div>
      <button class="ab ab-p" style="width:100%;padding:13px;font-size:15px;font-weight:800;justify-content:center;margin-top:6px;" onclick="addCategory()">✅ Add Category</button>
    </div>

    <!-- SUB CATEGORY -->
    <div class="adm-form">
      <div class="adm-form-title">➕ Add Sub-Category</div>
      <div class="adm-form-sub">Nested under a main category</div>
      <div class="adm-f"><label>Under Main Category *</label><select class="adm-sel dyn-cat" id="subCatParent"><option value="">Select Main Category…</option></select></div>
      <div class="adm-f"><label>Sub-Category Name *</label><input type="text" class="adm-inp" id="newSubName" placeholder="e.g. Tenses, Algebra, Forces…"></div>
      <div class="adm-f"><label>MCQ Count (approx)</label><input type="number" class="adm-inp" id="newSubCount" placeholder="e.g. 500" min="0"></div>
      <button class="ab ab-p" style="width:100%;padding:13px;justify-content:center;margin-top:6px;" onclick="addSubCategory()">➕ Add Sub-Category</button>
    </div>

    <!-- SUB-SUB CATEGORY -->
    <div class="adm-form">
      <div class="adm-form-title">➕ Add Sub-Sub Category</div>
      <div class="adm-form-sub">Nested under a sub-category</div>
      <div class="adm-f">
        <label>Select Main Category *</label>
        <select class="adm-sel" id="sscMainCat" onchange="loadSubCatsForSSC()">
          <option value="">— All Main Categories —</option>
        </select>
      </div>
      <div class="adm-f">
        <label>Select Sub-Category *</label>
        <select class="adm-sel" id="sscSubCat">
          <option value="">— Select Main Category First —</option>
        </select>
      </div>
      <div class="adm-f"><label>Sub-Sub Category Name *</label><input type="text" class="adm-inp" id="newSSCName" placeholder="e.g. Past Tense, Quadratic…"></div>
      <div class="adm-f"><label>MCQ Count (approx)</label><input type="number" class="adm-inp" id="newSSCCount" placeholder="e.g. 200" min="0"></div>
      <button class="ab ab-p" style="width:100%;padding:13px;justify-content:center;margin-top:6px;" onclick="addSubSubCategory()">➕ Add Sub-Sub Category</button>
    </div>

  </div>
  <div class="adm-tbl-wrap">
    <div class="adm-tbl-head"><div class="adm-tbl-title">All Categories, Sub &amp; Sub-Sub (<span id="catCount">10</span>)</div></div>
    <div style="overflow-x:auto;"><table class="adm-table" style="min-width:500px;"><thead><tr><th>#</th><th>Icon</th><th>Name</th><th>Type</th><th>Parent</th><th>Homepage</th><th>MCQs</th><th>Actions</th></tr></thead><tbody id="catTableBody"></tbody></table></div>
  </div>
</div>

<!-- USERS TAB -->
<div class="adm-tab" id="admt-users">
  <div class="adm-pg-title">👥 Users</div>
  <div class="adm-pg-sub">All registered users on Vokomoon.</div>
  <div class="adm-tbl-wrap">
    <div class="adm-tbl-head"><div class="adm-tbl-title">Registered Users</div></div>
    <div style="overflow-x:auto;"><table class="adm-table" style="min-width:500px;"><thead><tr><th>#</th><th>Name</th><th>Email</th><th>Method</th><th>Joined</th><th>Status</th><th>Action</th></tr></thead><tbody id="usersBody"><tr><td colspan="7" style="text-align:center;padding:24px;color:var(--ad);">No users yet.</td></tr></tbody></table></div>
    <div class="tbl-pag"><span>Total: <b id="userTotal">0</b> users</span></div>
  </div>
</div>

<!-- SETTINGS TAB -->
<div class="adm-tab" id="admt-settings">
  <div class="adm-pg-title">⚙️ Settings</div>
  <div class="adm-pg-sub">Configure Vokomoon platform settings.</div>
  <div class="adm-form">
    <div class="adm-form-title">🌐 Site Settings</div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
      <div class="adm-f"><label>Site Name</label><input type="text" class="adm-inp" value="Vokomoon"></div>
      <div class="adm-f"><label>WhatsApp Number</label><input type="text" class="adm-inp" value="+92 303 9181337"></div>
      <div class="adm-f"><label>Contact Email</label><input type="text" class="adm-inp" placeholder="contact@mcqmaster.pk"></div>
      <div class="adm-f"><label>Tagline</label><input type="text" class="adm-inp" value="Pakistan's #1 vokomoon Platform"></div>
    </div>
    <button class="ab ab-p" onclick="toast('✅ Settings saved!','s')">💾 Save Settings</button>
  </div>
  <div class="adm-form" style="margin-top:14px;">
    <div class="adm-form-title">🔐 Change Admin Password</div>
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;">
      <div class="adm-f"><label>Current Password</label><input type="password" class="adm-inp" placeholder="Current…"></div>
      <div class="adm-f"><label>New Password</label><input type="password" class="adm-inp" placeholder="New…"></div>
      <div class="adm-f"><label>Confirm New</label><input type="password" class="adm-inp" placeholder="Confirm…"></div>
    </div>
    <button class="ab ab-p" onclick="changeAdmPwd()">🔒 Update Password</button>
  </div>
</div>

<!-- SET PUBLISH TAB -->
<div class="adm-tab" id="admt-setPublish">
  <div class="adm-pg-title">📦 Set Publish</div>
  <div class="adm-pg-sub">Ek named set banao aur website par publish karo — bilkul waise jaise pehle wale sets hain.</div>
  <div class="adm-form" style="max-width:600px;">
    <div class="adm-form-title">📦 Naya Set Publish Karein</div>
    <!-- Publish Target for Set -->
    <div style="margin-bottom:16px;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.22);border-radius:12px;padding:14px;">
      <div style="font-size:12px;font-weight:800;color:var(--aa);margin-bottom:12px;">📍 Kahan Publish Karein — Sirf Ek Select Karein</div>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
        <div id="sptBox1" class="pt-box pt-active" onclick="selectSPT(1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:10px;padding:10px;cursor:pointer;">
          <div style="font-size:11px;font-weight:800;color:var(--aa);margin-bottom:8px;">① Main Category</div>
          <select class="adm-sel" id="spt1Cat" onclick="event.stopPropagation()" style="font-size:12px;">
            <option value="">Select…</option>
          </select>
        </div>
        <div id="sptBox2" class="pt-box" onclick="selectSPT(2)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">② Sub Category</div>
          <select class="adm-sel" id="spt2Main" onclick="event.stopPropagation()" onchange="loadSPT2Subs()" style="font-size:12px;margin-bottom:6px;">
            <option value="">Select Main…</option>
          </select>
          <select class="adm-sel" id="spt2Sub" onclick="event.stopPropagation()" style="font-size:12px;">
            <option value="">— Pehle Main —</option>
          </select>
        </div>
        <div id="sptBox3" class="pt-box" onclick="selectSPT(3)" style="border:2px solid var(--abr);border-radius:10px;padding:10px;cursor:pointer;opacity:.55;">
          <div style="font-size:11px;font-weight:800;color:var(--at);margin-bottom:8px;">③ Sub-Sub</div>
          <select class="adm-sel" id="spt3Main" onclick="event.stopPropagation()" onchange="loadSPT3Subs()" style="font-size:12px;margin-bottom:6px;">
            <option value="">Select Main…</option>
          </select>
          <select class="adm-sel" id="spt3Sub" onclick="event.stopPropagation()" onchange="loadSPT3SSC()" style="font-size:12px;margin-bottom:6px;">
            <option value="">— Pehle Main —</option>
          </select>
          <select class="adm-sel" id="spt3SSC" onclick="event.stopPropagation()" style="font-size:12px;">
            <option value="">— Pehle Sub —</option>
          </select>
        </div>
      </div>
    </div>
    <div class="adm-f"><label>Set Name *</label><input type="text" class="adm-inp" id="spSetName" placeholder="e.g. Set 1, English Set A, PPSC 2024 Set…"></div>
    <div class="adm-f"><label>Set Number</label><input type="number" class="adm-inp" id="spSetNum" value="1" min="1" placeholder="1"></div>
    <div class="adm-f"><label>Description (Optional)</label><textarea class="adm-inp" id="spSetDesc" style="min-height:55px;" placeholder="Is set ke baare mein brief info…"></textarea></div>
    <button class="ab ab-p" style="width:100%;padding:13px;font-size:15px;justify-content:center;" onclick="publishSet()">🚀 Publish Set to Website</button>
  </div>
  <div style="margin-top:22px;">
    <div style="font-size:15px;font-weight:700;color:var(--at);margin-bottom:12px;">📦 Published Sets (<span id="setCount">0</span>)</div>
    <div id="setList"><div class="pub-empty">No sets yet. Opar se publish karein! 📦</div></div>
  </div>
</div>

<!-- QUESTIONS TAB -->
<div class="adm-tab" id="admt-questions">
  <div class="adm-pg-title">❓ Asked Questions</div>
  <div class="adm-pg-sub">All questions posted by users from the Ask page.</div>
  <div id="questionsListAdmin"><div class="pub-empty">No questions posted yet. 💬</div></div>
</div>

</div><!-- adm-content -->
</div><!-- adm-right -->
</div><!-- adm-layout -->
</div><!-- admDash -->
</div><!-- adm-wrap -->
</div><!-- adm -->
</div><!-- page-admin -->

<!-- ░░ SAVED ITEMS PAGE ░░ -->
<div class="page" id="page-saved">
  <div class="pg-header"><div class="container"><h2>🔖 Saved Items</h2><p>Aapke save kiye huye MCQs, articles, PDFs, videos aur notes</p></div></div>
  <div style="max-width:900px;margin:32px auto;padding:0 24px 48px;">
    <div id="savedLoginMsg" style="display:none;background:var(--white);border:2px dashed var(--border);border-radius:16px;padding:36px;text-align:center;">
      <div style="font-size:44px;margin-bottom:12px;">🔐</div>
      <div style="font-family:'Playfair Display',serif;font-size:20px;font-weight:800;color:var(--forest);margin-bottom:8px;">Login Karein — Save Karne Ke Liye</div>
      <div style="font-size:14px;color:var(--text3);margin-bottom:20px;">Apne saved items dekhne ke liye pehle login ya register karein</div>
      <div style="display:flex;gap:10px;justify-content:center;">
        <button class="btn btn-o" onclick="openAuth('login')">Login</button>
        <button class="btn btn-p" onclick="openAuth('register')">Register Free</button>
      </div>
    </div>
    <div id="savedContent" style="display:none;">
      <div style="display:flex;gap:8px;margin-bottom:18px;flex-wrap:wrap;">
        <button class="sec-tab active" id="sf-all" onclick="filterSaved('all')">All</button>
        <button class="sec-tab" id="sf-mcq" onclick="filterSaved('mcq')">MCQs</button>
        <button class="sec-tab" id="sf-article" onclick="filterSaved('article')">Articles</button>
        <button class="sec-tab" id="sf-pdf" onclick="filterSaved('pdf')">PDFs</button>
        <button class="sec-tab" id="sf-video" onclick="filterSaved('video')">Videos</button>
        <button class="sec-tab" id="sf-notes" onclick="filterSaved('notes')">Notes</button>
      </div>
      <div id="savedList"></div>
      <div id="savedEmpty" style="display:none;background:var(--white);border:2px dashed var(--border);border-radius:16px;padding:36px;text-align:center;">
        <div style="font-size:44px;margin-bottom:12px;">🔖</div>
        <div style="font-size:16px;font-weight:700;color:var(--text3);">Koi saved item nahi</div>
        <div style="font-size:13px;color:var(--text3);margin-top:6px;">MCQs, articles ya PDFs par 🔖 Save button dabao</div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <div style="display:flex;align-items:center;gap:11px;margin-bottom:14px;">
        <div class="logo-icon"><svg viewBox="0 0 24 24" stroke="white" stroke-width="2.2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <div><div class="logo-name" style="color:white;">Voko<span>moon</span></div><div class="logo-sub">Smart Learning Hub</div></div>
      </div>
      <p style="font-size:13px;color:#7aad94;line-height:1.7;">Pakistan's most comprehensive vokomoon platform. Trusted by 1.2M+ students nationwide for CSS, PPSC, FPSC, NTS exam preparation.</p>
    </div>
    <div class="footer-col"><h5>Quick Links</h5><div id="footerCatLinks"><a onclick="go('home')">Home</a></div></div>
    <div class="footer-col"><h5>Platform</h5><a onclick="go('blog')">Blog</a><a onclick="go('interview')">Interview Prep</a><a onclick="go('ask')">Ask Question</a><a onclick="go('admin')">Admin Panel</a></div>
    <div class="footer-col"><h5>Contact</h5><a href="https://wa.me/923039181337" target="_blank">📱 +92 303 9181337</a><a href="#">About Us</a><a href="#">Privacy Policy</a><a href="#">Terms of Use</a></div>
  </div>
  <div class="footer-bot"><span>© 2026 Vokomoon.com — All rights reserved.</span><span>Made with ❤️ in Pakistan 🇵🇰</span></div>
</footer>

<!-- WhatsApp -->
<a class="wa-fab" href="https://wa.me/923039181337" target="_blank">
  <div class="wa-pulse"></div>
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
</a>

<!-- LINK MODAL -->
<div class="mod" id="linkMod">
  <div class="mod-box">
    <h4>🔗 Insert Link</h4>
    <div class="mod-f"><label>Link Text</label><input type="text" id="lnkText" placeholder="Display text…"></div>
    <div class="mod-f"><label>URL *</label><input type="text" id="lnkUrl" placeholder="https://example.com"></div>
    <div class="mod-f"><label>Link Type (SEO)</label><select id="lnkType"><option value="">DoFollow</option><option value="nofollow">NoFollow</option><option value="sponsored">Sponsored</option><option value="ugc">UGC</option></select></div>
    <div class="mod-f"><label>Open In</label><select id="lnkTarget"><option value="_blank">New Tab</option><option value="_self">Same Tab</option></select></div>
    <div class="mod-actions"><button class="ab ab-o" onclick="closeMod('linkMod')">Cancel</button><button class="ab ab-p" onclick="insertLink()">✅ Insert Link</button></div>
  </div>
</div>

<!-- IMAGE MODAL -->
<div class="mod" id="imgMod">
  <div class="mod-box">
    <h4>🖼️ Insert Image</h4>
    <div class="img-tabs"><div class="img-tab active" id="imgTab1" onclick="switchImgTab(1)">📁 Upload</div><div class="img-tab" id="imgTab2" onclick="switchImgTab(2)">🔗 URL</div></div>
    <div id="imgUpDiv">
      <div class="upload-area" onclick="document.getElementById('imgFileInp').click()" style="margin-bottom:12px;">
        <input type="file" id="imgFileInp" accept="image/*" onchange="handleImgUpload(this)">
        <div style="font-size:28px;margin-bottom:7px;">🖼️</div>
        <div style="font-size:13px;font-weight:700;color:var(--at);" id="imgUpName">Click to Select Image</div>
      </div>
      <div id="imgUpPrev" style="display:none;margin-bottom:12px;"><img id="imgUpPrevEl" style="max-width:100%;max-height:140px;border-radius:8px;display:block;margin:0 auto;"></div>
    </div>
    <div id="imgUrlDiv" style="display:none;">
      <div class="mod-f"><label>Image URL *</label><input type="text" id="imgUrlInp" placeholder="https://…/image.jpg" oninput="prevImgUrl()"></div>
      <div id="imgUrlPrev" style="display:none;margin:10px 0;"><img id="imgUrlPrevEl" style="max-width:100%;max-height:120px;border-radius:8px;display:block;margin:0 auto;"></div>
    </div>
    <div class="mod-f"><label>Alt Text (SEO)</label><input type="text" id="imgAlt" placeholder="Describe the image…"></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
      <div class="mod-f"><label>Width</label><input type="text" id="imgWidth" value="100%" placeholder="100% or 400px"></div>
      <div class="mod-f"><label>Align</label><select id="imgAlign"><option value="">None</option><option value="style='display:block;margin:0 auto;'">Center</option><option value="style='float:right;margin:0 0 10px 10px;'">Right</option></select></div>
    </div>
    <div class="mod-actions"><button class="ab ab-o" onclick="closeMod('imgMod')">Cancel</button><button class="ab ab-p" onclick="insertImg()">✅ Insert Image</button></div>
  </div>
</div>

<!-- AUTH MODAL -->
<div class="overlay" id="authOverlay" onclick="if(event.target===this)closeAuth()">
  <div class="auth-box">
    <div class="auth-head">
      <div class="auth-head-logo">
        <div class="auth-head-icon"><svg viewBox="0 0 24 24" stroke="white" stroke-width="2.2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <span style="font-family:'Playfair Display',serif;font-size:19px;font-weight:900;color:white;">Voko<span style="color:#4EDDA0;">moon</span></span>
      </div>
      <div class="auth-title" id="authTitle">Welcome Back!</div>
      <div class="auth-sub" id="authSub">Login to continue learning</div>
      <button class="auth-close" onclick="closeAuth()">×</button>
    </div>
    <div style="padding:0 24px;margin-top:16px;"><div class="auth-tabs"><div class="auth-tab active" id="tabL" onclick="switchTab('login')">Login</div><div class="auth-tab" id="tabR" onclick="switchTab('register')">Register</div></div></div>
    <div class="auth-body">
      <div id="authSuccess" style="display:none;" class="a-success"><span class="a-success-icon">🎉</span><div class="a-success-title" id="succTitle">Welcome!</div><div class="a-success-sub" id="succSub">Logged in.</div></div>
      <div id="authForm">
        <div id="loginForm">
          <div class="a-grp"><label>Email</label><input type="email" class="a-inp" id="liEmail" placeholder="your@email.com" oninput="clrErr('liEmail')"><div class="a-err" id="liEmailErr">Enter valid email</div></div>
          <div class="a-grp" style="position:relative;"><label>Password</label><input type="password" class="a-inp" id="liPass" placeholder="Your password" oninput="clrErr('liPass')"><span class="pwd-tog" onclick="togPwd('liPass',this)">👁</span><div class="a-err" id="liPassErr">Min 6 characters</div></div>
          <div style="text-align:right;margin-bottom:4px;"><a style="font-size:12px;color:var(--em);cursor:pointer;font-weight:600;" onclick="toast('Reset link sent (demo)','i')">Forgot password?</a></div>
          <button class="a-submit" id="loginBtn" onclick="doLogin()"><span id="loginBtnTxt">Login to Vokomoon</span><div class="a-spin" id="loginSpin"></div></button>
        </div>
        <div id="registerForm" style="display:none;">
          <div class="a-grp"><label>Full Name *</label><input type="text" class="a-inp" id="regName" placeholder="Your full name" oninput="clrErr('regName')"><div class="a-err" id="regNameErr">Enter full name</div></div>
          <div class="a-grp"><label>Email *</label><input type="email" class="a-inp" id="regEmail" placeholder="your@email.com" oninput="clrErr('regEmail')"><div class="a-err" id="regEmailErr">Enter valid email</div></div>
          <div class="a-grp" style="position:relative;"><label>Password * (min 8 chars)</label><input type="password" class="a-inp" id="regPass" placeholder="Create strong password" oninput="pwdStr();clrErr('regPass')"><span class="pwd-tog" onclick="togPwd('regPass',this)">👁</span><div class="a-err" id="regPassErr">Min 8 characters</div><div class="pwd-bar" id="pwdBarW" style="display:none;"><div class="pwd-bar-track"><div class="pwd-bar-fill" id="pwdFill"></div></div><div class="pwd-bar-txt" id="pwdTxt"></div></div></div>
          <div class="a-grp" style="position:relative;"><label>Confirm Password *</label><input type="password" class="a-inp" id="regConf" placeholder="Re-enter password" oninput="clrErr('regConf')"><span class="pwd-tog" onclick="togPwd('regConf',this)">👁</span><div class="a-err" id="regConfErr">Passwords don't match</div></div>
          <div style="display:flex;align-items:flex-start;gap:9px;margin-bottom:4px;"><input type="checkbox" id="regTerms" style="margin-top:3px;accent-color:var(--em);"><label for="regTerms" style="font-size:12px;color:var(--text3);line-height:1.5;cursor:pointer;">I agree to the <a style="color:var(--em);font-weight:700;">Terms</a> and <a style="color:var(--em);font-weight:700;">Privacy Policy</a></label></div>
          <div class="a-err" id="regTermsErr">Please accept terms</div>
          <button class="a-submit" id="regBtn" onclick="doRegister()"><span id="regBtnTxt">Create Free Account</span><div class="a-spin" id="regSpin"></div></button>
        </div>
        <div class="a-switch" id="authSwitch">Don't have an account? <a onclick="switchTab('register')">Register Free →</a></div>
      </div>
    </div>
  </div>
</div>
<script>
'use strict';
/* ══════════════════════════════════
   CENTRAL DATABASE
══════════════════════════════════ */
const DB = {
  users: [],
  mcqs: [],
  articles: [],
  pdfs: [],
  videos: [],
  notes: [],
  questions: [],
  savedItems: [],
  cats: [
    {id:'english',    name:'English',         icon:'📗', color:'#e8f5ee', show:true,  mcqs:0},
    {id:'maths',      name:'Mathematics',     icon:'🔢', color:'#fff3e0', show:true,  mcqs:0},
    {id:'science',    name:'General Science', icon:'🔬', color:'#e3f2fd', show:true,  mcqs:0},
    {id:'computer',   name:'Computer Science',icon:'💻', color:'#f3e5f5', show:true,  mcqs:0},
    {id:'gk',         name:'General Knowledge',icon:'🌍',color:'#fce4ec', show:true,  mcqs:0},
    {id:'pakstudies', name:'Pakistan Studies', icon:'📜', color:'#e8f5e9', show:true,  mcqs:0},
    {id:'chemistry',  name:'Chemistry',        icon:'⚗️', color:'#fff8e1', show:true,  mcqs:0},
    {id:'biology',    name:'Biology',          icon:'🧬', color:'#e0f7fa', show:true,  mcqs:0},
    {id:'islamic',    name:'Islamic Studies',  icon:'☪️', color:'#fbe9e7', show:true,  mcqs:0},
    {id:'current',    name:'Current Affairs',  icon:'📰', color:'#ede7f6', show:true,  mcqs:0}
  ],
  subcats: [
    {id:'tenses',  parent:'english',   name:'Tenses',         mcqs:0},
    {id:'grammar', parent:'english',   name:'Grammar',        mcqs:0},
    {id:'vocab',   parent:'english',   name:'Vocabulary',     mcqs:0},
    {id:'arith',   parent:'maths',     name:'Arithmetic',     mcqs:0},
    {id:'algebra', parent:'maths',     name:'Algebra',        mcqs:0},
    {id:'physics', parent:'science',   name:'Physics',        mcqs:0},
    {id:'basics',  parent:'computer',  name:'Computer Basics',mcqs:0},
    {id:'world',   parent:'gk',        name:'World Geography',mcqs:0}
  ],
  subsubcats: [],
  sampleMcqs: [],
  sampleArticles: []
};

/* ══════════════════════════════════
   MYSQL DATABASE PERSISTENCE (via api.php)
   localStorage ki jagah ab MySQL use hoga
══════════════════════════════════ */
const API_URL = 'api.php';
let _saveTimer = null;
let _isSaving = false;

// Debounced save — multiple quick saves ko merge karta hai
async function saveDB() {
  if (_saveTimer) clearTimeout(_saveTimer);
  _saveTimer = setTimeout(_doSave, 500);
}

async function _doSave() {
  if (_isSaving) { _saveTimer = setTimeout(_doSave, 600); return; }
  _isSaving = true;
  try {
    const data = {
      mcqs:DB.mcqs, articles:DB.articles, pdfs:DB.pdfs,
      videos:DB.videos, notes:DB.notes, questions:DB.questions,
      cats:DB.cats, subcats:DB.subcats, subsubcats:DB.subsubcats,
      users:DB.users, sets:DB.sets||[], savedItems:DB.savedItems||[]
    };
    const r = await fetch(API_URL + '?action=save_all', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({data})
    });
    if (!r.ok) console.warn('saveDB: server error', r.status);
  } catch(e) { console.warn('saveDB error:', e); }
  finally { _isSaving = false; }
}

async function loadDB() {
  try {
    const r = await fetch(API_URL + '?action=get_all');
    if (!r.ok) { console.warn('loadDB: server error', r.status); return; }
    const d = await r.json();
    if (d.error) { console.warn('loadDB error:', d.error); return; }
    if (d.mcqs)         DB.mcqs         = d.mcqs;
    if (d.articles)     DB.articles     = d.articles;
    if (d.pdfs)         DB.pdfs         = d.pdfs;
    if (d.videos)       DB.videos       = d.videos;
    if (d.notes)        DB.notes        = d.notes;
    if (d.questions)    DB.questions    = d.questions;
    if (d.cats)         DB.cats         = d.cats;
    if (d.subcats)      DB.subcats      = d.subcats;
    if (d.subsubcats)   DB.subsubcats   = d.subsubcats;
    if (d.users)        DB.users        = d.users;
    if (d.sets)         DB.sets         = d.sets;
    else                DB.sets         = [];
    if (d.savedItems)   DB.savedItems   = d.savedItems;
    else                DB.savedItems   = [];
  } catch(e) { console.warn('loadDB error:', e); }
}

// State
const actLog = [];
let curUser = null;
let admLight = false;
let mcqBlkN = 1;
let savedRange = null;
let imgDataUrl = null;
let curMcqList = [];
let curMcqIdx = 0;

/* ══════ INIT ══════ */
async function init() {
  // Show loading overlay while fetching from MySQL
  const overlay = document.getElementById('loadingOverlay');
  if (overlay) overlay.style.display = 'flex';
  
  await loadDB();
  
  if (!DB.sets) DB.sets = [];
  renderHomeCats();
  renderHomeMcqs();
  renderHomeBlog();
  renderHomePdfs();
  renderHomeVideos();
  renderHomeNotes();
  refreshNavCats();
  refreshFooterCats();
  refreshAllCatSelects();
  refreshPTDropdowns();
  renderCatTable();
  updateDashStats();
  
  // Hide loading overlay
  if (overlay) overlay.style.display = 'none';
}
window.addEventListener('DOMContentLoaded', init);

/* ══════ NAVIGATION ══════ */
function go(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const el = document.getElementById('page-' + page);
  if (el) { el.classList.add('active'); window.scrollTo({top:0,behavior:'smooth'}); }
  // Nav active state
  document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
  if (page === 'home') document.getElementById('navHome')?.classList.add('active');
  if (page === 'blog') document.getElementById('navBlog')?.classList.add('active');
  // Blog page: render
  if (page === 'blog') renderBlogPage();
  if (page === 'sitemap') renderSitemap();
  if (page === 'saved') renderSavedPage();
  // Admin: if already logged in, skip password screen
  if (page === 'admin' && admLoggedIn) {
    document.getElementById('admLock').style.display = 'none';
    document.getElementById('admDash').style.display = 'block';
    refreshAllCatSelects();
    refreshPTDropdowns();
    renderMcqTable();
    updateDashStats();
  }
}

function togglePassword() {
  const input = document.getElementById("lockInp");
  
  if (input.type === "password") {
    input.type = "text";
  } else {
    input.type = "password";
  }
}

function openCatPage(catId) {
  const cat = DB.cats.find(c => c.id === catId);
  if (!cat) return;
  document.getElementById('cpBread').innerHTML = `<span onclick="go('home')" style="color:var(--emlt);cursor:pointer;">Home</span> › ${cat.name}`;
  document.getElementById('cpTitle').textContent = cat.icon + ' ' + cat.name + ' MCQs';
  document.getElementById('cpDesc').textContent = 'Practice ' + cat.name + ' MCQs for CSS, PPSC, FPSC, NTS';

  // Real MCQ count — include sub-cat and sub-sub-cat MCQs (fix: ander publish hon)
  const _subIds = DB.subcats.filter(s => s.parent === catId).map(s => s.id);
  const _sscIds = DB.subsubcats.filter(x => x.mainParent === catId).map(x => x.id);
  const realMcqs = DB.mcqs.filter(m => m.cat === catId || _subIds.includes(m.cat) || _sscIds.includes(m.cat));
  const realCount = realMcqs.length;
  document.getElementById('cpMcqCnt').textContent = '📦 ' + realCount.toLocaleString() + ' MCQs';

  const subs = DB.subcats.filter(s => s.parent === catId);
  const subEl = document.getElementById('cpSubcats');
  subEl.innerHTML = subs.length ? subs.map(s => {
    // Count: sub-cat direct MCQs + all sub-sub-cat MCQs under it
    const _sscIdsUnderSub = DB.subsubcats.filter(x => x.parent === s.id).map(x => x.id);
    const subRealMcqs = DB.mcqs.filter(m => m.cat === s.id || _sscIdsUnderSub.includes(m.cat)).length;
    // Get sub-sub-cats under this sub
    const sscs = DB.subsubcats.filter(x => x.parent === s.id);
    const sscHtml = sscs.length ? `<div style="padding:0 18px 10px;display:flex;flex-wrap:wrap;gap:6px;">${sscs.map(x=>{
      const xMcqs = DB.mcqs.filter(m => m.cat === x.id).length;
      return `<span style="background:rgba(34,201,123,.1);border:1px solid rgba(34,201,123,.25);color:var(--forest2);padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;cursor:pointer;" onclick="event.stopPropagation();openSubSubCatPage('${catId}','${s.id}','${x.id}')">${x.name} (${xMcqs})</span>`;
    }).join('')}</div>` : '';
    return `<div>
      <div class="subcat-row" onclick="openSetPage('${catId}','${s.id}',1)">
        <div class="subcat-l"><div class="subcat-dot"></div>${s.name}</div>
        <div style="display:flex;align-items:center;gap:10px;"><span class="subcat-cnt">${subRealMcqs.toLocaleString()} MCQs</span><span style="color:var(--text3);font-size:17px;">›</span></div>
      </div>${sscHtml}</div>`;
  }).join('') :
  '<div style="padding:18px;text-align:center;color:var(--text3);">No sub-categories yet.</div>';

  // Sets based on actual MCQs: 1 Set = 100 MCQs (10 sections x 10 MCQs each)
  const mcqsPerSet = 100;
  const totalSets = realCount > 0 ? Math.ceil(realCount / mcqsPerSet) : 0;
  document.getElementById('cpSetCnt').textContent = '📚 ' + totalSets + ' Sets';
  if (totalSets > 0) {
    document.getElementById('cpSets').innerHTML = Array.from({length: Math.min(totalSets, 50)}, (_, i) => {
      const setStart = i * mcqsPerSet;
      const setMcqs = realMcqs.slice(setStart, setStart + mcqsPerSet);
      const pct = Math.round((setMcqs.length / mcqsPerSet) * 100);
      return `<div class="set-card" onclick="openSetPage('${catId}',null,${i+1})">
        <span class="set-num">${String(i+1).padStart(2,'0')}</span>
        <div class="set-lbl">${cat.name}</div>
        <div class="set-cnt" style="font-size:10px;color:var(--text3);margin-top:2px;">${setMcqs.length}/100 MCQs</div>
        <div class="set-bar"><div class="set-fill" style="width:${pct}%"></div></div>
      </div>`;
    }).join('');
  } else {
    document.getElementById('cpSets').innerHTML = '<div style="color:var(--text3);padding:12px;text-align:center;">No MCQs yet in this category.</div>';
  }

  // PDFs for this category (including sub-cats and sub-sub-cats)
  const subCatIds = DB.subcats.filter(s => s.parent === catId).map(s => s.id);
  const sscIds2 = DB.subsubcats.filter(x => x.mainParent === catId).map(x => x.id);
  const allCatIds = [catId, ...subCatIds, ...sscIds2];
  const pdfs = DB.pdfs.filter(p => allCatIds.includes(p.catId) || DB.cats.find(c=>c.name===p.cat&&c.id===catId));
  const pSec = document.getElementById('cpPdfSec');
  if (pSec) {
    pSec.style.display = pdfs.length ? 'block' : 'none';
    if (pdfs.length) document.getElementById('cpPdfList').innerHTML = pdfs.map(p =>
      `<div class="mcq-card" onclick="openContent('pdf','${p.id}')" style="cursor:pointer;">
        <div class="mcq-num" style="background:rgba(74,158,245,.12);color:#4a9ef5;">📄 PDF</div>
        <div class="mcq-body"><div class="mcq-q">${p.title}</div><div class="mcq-meta"><span class="tag tag-cat">${p.cat}</span><span class="mcq-views">📅 ${p.date}</span></div></div>
        ${saveBtnHtml('pdf',p.id,p.title,p.cat,"openContent('pdf','"+p.id+"')")}
      </div>`).join('');
  }

  // Videos for this category (including sub-cats and sub-sub-cats)
  const vids = DB.videos.filter(v => allCatIds.includes(v.catId) || DB.cats.find(c=>c.name===v.cat&&c.id===catId));
  const vSec = document.getElementById('cpVidSec');
  if (vSec) {
    vSec.style.display = vids.length ? 'block' : 'none';
    if (vids.length) document.getElementById('cpVidList').innerHTML = vids.map(v =>
      `<div class="mcq-card" onclick="openContent('video','${v.id}')" style="cursor:pointer;">
        <div class="mcq-num" style="background:rgba(245,200,66,.15);color:#b07800;">🎥 Video</div>
        <div class="mcq-body"><div class="mcq-q">${v.title}</div><div class="mcq-meta"><span class="tag tag-cat">${v.cat}</span><span class="mcq-views">📅 ${v.date}</span></div></div>
        ${saveBtnHtml('video',v.id,v.title,v.cat,"openContent('video','"+v.id+"')")}
      </div>`).join('');
  }

  // Notes for this category (including sub-cats and sub-sub-cats)
  const notes = DB.notes.filter(n => allCatIds.includes(n.catId) || DB.cats.find(c=>c.name===n.cat&&c.id===catId));
  const nSec = document.getElementById('cpNotesSec');
  if (nSec) {
    nSec.style.display = notes.length ? 'block' : 'none';
    if (notes.length) document.getElementById('cpNotesList').innerHTML = notes.map(n =>
      `<div class="mcq-card" onclick="openContent('notes','${n.id}')" style="cursor:pointer;">
        <div class="mcq-num" style="background:rgba(255,107,91,.12);color:#c0302a;">📓 Notes</div>
        <div class="mcq-body"><div class="mcq-q">${n.title}</div><div class="mcq-meta"><span class="tag tag-cat">${n.cat}</span><span class="mcq-views">📅 ${n.date}</span></div></div>
        ${saveBtnHtml('notes',n.id,n.title,n.cat,"openContent('notes','"+n.id+"')")}
      </div>`).join('');
  }

  go('catpage');
}


let curSetPage = 1;
let curSetCatId = null;
let curSetSubId = null;
let curSetNum = 1;

function openSetPage(catId, subcatId, setNum=1) {
  curSetCatId = catId; curSetSubId = subcatId; curSetNum = setNum; curSetPage = 1; curSetSection = 1;
  window._iqSelections = {};
  renderSetPage();
}

// Open set page filtered to only sub-sub-cat MCQs
function openSubSubCatPage(catId, subId, sscId) {
  curSetCatId = catId; curSetSubId = sscId; curSetNum = 1; curSetPage = 1; curSetSection = 1;
  window._iqSelections = {};
  renderSetPage();
}

let curSetSection = 1; // active section (1-indexed, each section = 10 MCQs)

function renderSetPage() {
  const catId = curSetCatId; const subcatId = curSetSubId; const setNum = curSetNum;
  const cat = DB.cats.find(c => c.id === catId);
  const sub = subcatId ? DB.subcats.find(s => s.id === subcatId) : null;
  const ssc = subcatId ? DB.subsubcats.find(x => x.id === subcatId) : null;
  const nm = ssc ? ssc.name : (sub ? sub.name : (cat ? cat.name : 'MCQs'));

  document.getElementById('setBread').innerHTML = `<span onclick="go('home')" style="color:var(--emlt);cursor:pointer;">Home</span> › <span onclick="openCatPage('${catId}')" style="color:var(--emlt);cursor:pointer;">${cat?.name||''}</span> › ${nm} › Set ${setNum}`;
  document.getElementById('setTitle').textContent = `Set ${setNum} — ${nm} MCQs`;
  document.getElementById('setSeoUrl').textContent = `Vokomoon.com/${catId}/${subcatId||'set'}/set-${setNum}`;

  // Get ALL MCQs for this category/subcat (including sub-sub categories)
  let allMcqs;
  if (subcatId) {
    if (ssc) {
      // It's a sub-sub-cat — only its MCQs
      allMcqs = DB.mcqs.filter(m => m.cat === subcatId);
    } else {
      // It's a sub-cat — include sub-cat MCQs + any sub-sub-cat MCQs under it
      const sscIds = DB.subsubcats.filter(x => x.parent === subcatId).map(x => x.id);
      allMcqs = DB.mcqs.filter(m => m.cat === subcatId || sscIds.includes(m.cat));
    }
  } else {
    // Main cat — include direct MCQs + sub-cat MCQs + sub-sub-cat MCQs
    const subIds = DB.subcats.filter(s => s.parent === catId).map(s => s.id);
    const sscIds = DB.subsubcats.filter(x => x.mainParent === catId).map(x => x.id);
    allMcqs = DB.mcqs.filter(m => m.cat === catId || subIds.includes(m.cat) || sscIds.includes(m.cat));
  }
  // 1 Set = 100 MCQs (10 sections x 10 MCQs)
  const mcqsPerSet2 = 100;
  const perSection = 10;
  const sectionsPerSet = 10; // always 10 sections per set

  // Slice MCQs for this specific set only
  const setStartIdx2 = (setNum - 1) * mcqsPerSet2;
  const setMcqs2 = allMcqs.slice(setStartIdx2, setStartIdx2 + mcqsPerSet2);
  curMcqList = allMcqs; // keep full list for navigation

  const totalMcqs = allMcqs.length;
  const totalSets = Math.max(Math.ceil(totalMcqs / mcqsPerSet2), 1);
  // How many sections are filled in this set
  const thisSectionCount = Math.max(Math.ceil(setMcqs2.length / perSection), setMcqs2.length > 0 ? 1 : 0);
  document.getElementById('setSubt').textContent = setMcqs2.length + ' MCQs in this set · ' + thisSectionCount + ' pages · 10 per section';

  // Build section tabs (only for this set's sections)
  const tabsEl = document.getElementById('sectionTabs');
  const tabsEl2 = document.getElementById('sectionTabs2');
  if (tabsEl) {
    tabsEl.innerHTML = '';
    tabsEl2.innerHTML = '';
    for (let s = 1; s <= thisSectionCount; s++) {
      const btn = document.createElement('button');
      btn.className = 'sec-tab' + (s === curSetSection ? ' active' : '');
      btn.textContent = 'Page ' + s;
      btn.onclick = (function(sec){ return function(){ goToSection(sec); }; })(s);
      const btn2 = document.createElement('button');
      btn2.className = 'sec-tab' + (s === curSetSection ? ' active' : '');
      btn2.textContent = 'Page ' + s;
      btn2.onclick = (function(sec){ return function(){ goToSection(sec); }; })(s);
      tabsEl.appendChild(btn);
      tabsEl2.appendChild(btn2);
    }
  }

  // Render current section MCQs: offset by set + section
  const sectionOffsetInSet = (curSetSection - 1) * perSection;
  const startIdx = setStartIdx2 + sectionOffsetInSet;
  const shownMcqs = allMcqs.slice(startIdx, startIdx + perSection);
  const listEl = document.getElementById('setMcqList');
  const submitWrap = document.getElementById('setSubmitWrap');
  const resetBtn = document.getElementById('setResetBtn');
  const submitBtn = submitWrap?.querySelector('button:first-child');

  if (!shownMcqs.length) {
    listEl.innerHTML = '<div style="text-align:center;padding:36px;color:var(--text3);font-size:14px;">No MCQs in this category yet.<br><span style="font-size:12px;">Admin panel se MCQs publish karein.</span></div>';
    if (submitWrap) submitWrap.style.display = 'none';
  } else {
    const letters = ['A','B','C','D','E'];
    listEl.innerHTML = shownMcqs.map((m, i) => {
      const qNum = startIdx + i + 1;
      const optsHtml = (m.opts||[]).map((o, j) =>
        `<div class="iq-opt" id="iqOpt_${m.id}_${j}" onclick="selectIQOpt('${m.id}',${j},${m.correct})">
          <div class="iq-opt-lbl">${letters[j]}</div>
          <span>${o}</span>
        </div>`
      ).join('');
      return `<div class="iq-card" id="iqCard_${m.id}">
        <div style="display:flex;align-items:flex-start;gap:0;margin-bottom:10px;">
          <span class="iq-num">${qNum}</span>
          <div class="iq-q" style="margin-bottom:0;flex:1;">${m.q}</div>
          ${saveBtnHtml('mcq',m.id,m.q,m.catName||m.cat,"openMcqDetail('"+m.id+"',0)")}
        </div>
        <div class="iq-body-row">
          <div class="iq-opts" id="iqOpts_${m.id}">${optsHtml}</div>
          <div class="iq-side-result" id="iqSide_${m.id}">
            <div class="iq-exp" id="iqExp_${m.id}">${m.exp ? '<b>📘 Explanation:</b> ' + m.exp : ''}</div>
          </div>
        </div>
      </div>`;
    }).join('');
    if (submitWrap) {
      submitWrap.style.display = 'block';
      if (submitBtn) { submitBtn.style.display = 'inline-flex'; submitBtn.disabled = false; }
      if (resetBtn) resetBtn.style.display = 'none';
    }
  }
  document.getElementById('setPag').innerHTML = '';
  go('setpage');
}

function goToSection(sec) {
  curSetSection = sec;
  renderSetPage();
  window.scrollTo({top:0, behavior:'smooth'});
}

function selectIQOpt(mcqId, optIdx, correctIdx) {
  const card = document.getElementById('iqCard_' + mcqId);
  // If already answered correctly, ignore
  if (card && card.classList.contains('answered-correct')) return;

  const optsEl = document.getElementById('iqOpts_' + mcqId);
  if (!optsEl) return;

  const isCorrect = optIdx === correctIdx;

  if (isCorrect) {
    // --- CORRECT ---
    // Lock all, highlight correct green
    optsEl.querySelectorAll('.iq-opt').forEach((o, i) => {
      o.classList.remove('opt-sel','opt-wrong');
      o.classList.add('opt-locked');
      if (i === correctIdx) o.classList.add('opt-correct');
    });
    if (card) { card.classList.remove('answered-wrong'); card.classList.add('answered-correct'); }

    // Show "Correct!" message for 2 seconds
    const sideEl = document.getElementById('iqSide_' + mcqId);
    if (sideEl) sideEl.classList.add('show');

    // Show explanation only if admin wrote one
    const expEl = document.getElementById('iqExp_' + mcqId);
    const m2 = curMcqList.find(x => x.id === mcqId);
    if (expEl && m2 && m2.exp && m2.exp.trim()) {
      expEl.classList.add('show');
    }

    // Store as answered
    if (!window._iqSelections) window._iqSelections = {};
    window._iqSelections[mcqId] = { selected: optIdx, correct: correctIdx };

  } else {
    // --- WRONG ---
    // Just flash this option red for 1.5 sec, no message, allow retry
    const thisOpt = document.getElementById('iqOpt_' + mcqId + '_' + optIdx);
    if (thisOpt) {
      // Remove any previous wrong highlight
      optsEl.querySelectorAll('.iq-opt').forEach(o => o.classList.remove('opt-sel','opt-wrong'));
      thisOpt.classList.add('opt-wrong');
      // Show "Wrong!" message briefly
      const sideEl = document.getElementById('iqSide_' + mcqId);
      if (sideEl) sideEl.classList.add('show');
    }
  }
}

function submitSetAnswers() {
  const sels = window._iqSelections || {};
  const startIdx = (curSetSection - 1) * 10;
  const shownMcqs = curMcqList.slice(startIdx, startIdx + 10);
  let answered = 0;
  shownMcqs.forEach(m => {
    if (!sels[m.id] && sels[m.id] === undefined) return;
    if (sels[m.id] === undefined) return;
    answered++;
    const { selected, correct } = sels[m.id];
    const optsEl = document.getElementById('iqOpts_' + m.id);
    const card = document.getElementById('iqCard_' + m.id);
    const resEl = document.getElementById('iqRes_' + m.id);
    const expEl = document.getElementById('iqExp_' + m.id);
    if (!optsEl) return;
    // Lock all options
    optsEl.querySelectorAll('.iq-opt').forEach((o, i) => {
      o.classList.remove('opt-sel');
      o.classList.add('opt-locked');
      if (i === correct) o.classList.add('opt-correct');
      else if (i === selected) o.classList.add('opt-wrong');
    });
    const isCorrect = selected === correct;
    if (card) { card.classList.remove('answered-correct','answered-wrong'); card.classList.add(isCorrect ? 'answered-correct' : 'answered-wrong'); }
    if (resEl) {
      resEl.className = 'iq-result show ' + (isCorrect ? 'res-correct' : 'res-wrong');
      resEl.innerHTML = isCorrect ? '✅ Bilkul sahi! (Correct Answer)' : '❌ Galat jawab. Sahi jawab oopar green mein highlighted hai.';
    }
    if (expEl && m.exp) expEl.classList.add('show');
  });
  if (answered === 0) { toast('⚠️ Pehle koi jawab select karein!', 'e'); return; }
  const submitBtn = document.getElementById('setSubmitWrap')?.querySelector('button:first-child');
  const resetBtn = document.getElementById('setResetBtn');
  if (submitBtn) { submitBtn.style.display = 'none'; }
  if (resetBtn) resetBtn.style.display = 'inline-flex';
  toast('✅ Jawab check ho gaye!', 's');
}

function resetSetAnswers() {
  window._iqSelections = {};
  renderSetPage();
}

function submitSingleAnswer(mcqId, correctIdx) {
  const sels = window._iqSelections || {};
  if (sels[mcqId] === undefined) { toast('⚠️ Pehle jawab select karein!','e'); return; }
  const { selected } = sels[mcqId];
  const optsEl = document.getElementById('iqOpts_' + mcqId);
  const card = document.getElementById('iqCard_' + mcqId);
  const resEl = document.getElementById('iqRes_' + mcqId);
  const expEl = document.getElementById('iqExp_' + mcqId);
  if (!optsEl) return;
  // Lock all options
  const isCorrect = selected === correctIdx;
  optsEl.querySelectorAll('.iq-opt').forEach((o, i) => {
    o.classList.remove('opt-sel');
    o.classList.add('opt-locked');
    if (isCorrect) {
      if (i === correctIdx) o.classList.add('opt-correct');
    } else {
      if (i === selected) o.classList.add('opt-wrong');
    }
  });
  if (card) { card.classList.remove('answered-correct','answered-wrong'); card.classList.add(isCorrect ? 'answered-correct' : 'answered-wrong'); }
  // Show right-side result panel only on CORRECT answer
  const sideEl = document.getElementById('iqSide_' + mcqId);
  if (isCorrect) {
    if (sideEl) sideEl.classList.add('show');
    if (resEl) {
      resEl.className = 'iq-result show res-correct';
      resEl.innerHTML = '✅ Correct Answer!';
    }
    // Show explanation only if admin wrote one
    if (expEl) {
      const m = curMcqList.find(x => x.id === mcqId);
      if (m && m.exp && m.exp.trim()) {
        expEl.classList.add('show');
      } else {
        expEl.classList.remove('show');
      }
    }
  } else {
    // Wrong answer: hide right side panel completely
    if (sideEl) sideEl.classList.remove('show');
    if (resEl) resEl.className = 'iq-result';
    if (expEl) expEl.classList.remove('show');
  }
}

function setGoPage(p) {
  goToSection(p);
}

function openMcqDetail(mcqId, idx=0) {
  const all = [...DB.sampleMcqs, ...DB.mcqs];
  const m = all.find(x => x.id === mcqId) || all[idx];
  if (!m) return;
  curMcqIdx = curMcqList.findIndex(x => x.id === m.id);
  if (curMcqIdx < 0) { curMcqIdx = 0; curMcqList = all; }
  const cat = DB.cats.find(c => c.id === m.cat);
  document.getElementById('mcqBread').innerHTML = `<span onclick="go('home')" style="color:var(--em);cursor:pointer;">Home</span> › <span onclick="openCatPage('${m.cat}')" style="color:var(--em);cursor:pointer;">${cat?.name||m.cat}</span> › Q.${curMcqIdx+1}`;
  document.getElementById('mcqNum').textContent = 'Q.' + (curMcqIdx+1);
  document.getElementById('mcqQ').textContent = m.q;
  document.getElementById('mcqSeoUrl').textContent = 'Vokomoon.com/' + m.cat + '/' + m.q.toLowerCase().replace(/[^a-z0-9\s]/g,'').replace(/\s+/g,'-').substring(0,50);
  document.getElementById('mcqProgress').textContent = 'Q.'+(curMcqIdx+1)+' of '+curMcqList.length;
  // Support HTML explanations (rich text) and plain text
  const expEl = document.getElementById('mcqExpTxt');
  if (expEl) {
    const exp = m.exp || 'No explanation available.';
    if (exp.includes('<') && exp.includes('>')) { expEl.innerHTML = exp; }
    else { expEl.textContent = exp; }
  }
  document.getElementById('mcqExpBox').style.display = 'none';
  const letters = ['A','B','C','D','E'];
  document.getElementById('mcqOpts').innerHTML = (m.opts||[]).map((o,i) =>
    `<div class="opt" id="mOpt${i}" onclick="selOpt(${i})">`+
    `<div class="opt-lbl">${letters[i]}</div>${o}</div>`).join('');
  document.getElementById('mcqPrevBtn').style.display = curMcqIdx > 0 ? '' : 'none';
  document.getElementById('mcqNext2Btn').style.display = curMcqIdx < curMcqList.length-1 ? '' : 'none';
  document.getElementById('mcqSubmitBtn').onclick = () => doSubmitMcq(m.correct);
  go('mcqdetail');
}
function selOpt(i) {
  document.querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
  document.getElementById('mOpt'+i)?.classList.add('sel');
}
function doSubmitMcq(correct) {
  const opts = document.querySelectorAll('.opt');
  opts.forEach((o,i) => {
    o.classList.remove('sel','correct','wrong');
    const lbl = o.querySelector('.opt-lbl');
    const letters = ['A','B','C','D','E'];
    if (i === correct) { o.classList.add('correct'); if(lbl) lbl.textContent='✓'; }
    else if (o.classList.contains('sel')) { o.classList.add('wrong'); if(lbl) lbl.textContent='✗'; }
    else { if(lbl) lbl.textContent = letters[i]; }
  });
  document.getElementById('mcqExpBox').style.display = 'block';
}
function submitMcqAns() { document.getElementById('mcqSubmitBtn').onclick?.(); }
function toggleExp() { const b=document.getElementById('mcqExpBox'); b.style.display=b.style.display==='block'?'none':'block'; }
function mcqNext() { if(curMcqIdx<curMcqList.length-1){curMcqIdx++;openMcqDetail(curMcqList[curMcqIdx].id,curMcqIdx);} }
function mcqPrev() { if(curMcqIdx>0){curMcqIdx--;openMcqDetail(curMcqList[curMcqIdx].id,curMcqIdx);} }

/* ══════ HOME RENDERS ══════ */
function renderHomeCats() {
  const el = document.getElementById('homeCatGrid');
  if (!el) return;
  // Support both boolean true and string 'yes' for show
  const shown = DB.cats.filter(c => c.show === true || c.show === 'yes');
  if (!shown.length) {
    el.innerHTML = '<div style="padding:20px;color:var(--text3);text-align:center;">Koi category nahi. Admin panel se add karein.</div>';
    const hc = document.getElementById('heroCatCount');
    if (hc) hc.textContent = '0';
    return;
  }
  el.innerHTML = shown.map(c => {
    const _subIds = DB.subcats.filter(s => s.parent === c.id).map(s => s.id);
    const _sscIds = DB.subsubcats.filter(x => x.mainParent === c.id).map(x => x.id);
    const realMcqCnt = DB.mcqs.filter(m => m.cat === c.id || _subIds.includes(m.cat) || _sscIds.includes(m.cat)).length;
    return `<div class="cat-card" onclick="openCatPage('${c.id}')">
      <div class="cat-icon" style="background:${c.color||'#e8f5ee'};">${c.icon||'📚'}</div>
      <div class="cat-name">${c.name}</div>
      <div class="cat-count">${realMcqCnt.toLocaleString()} MCQs</div>
      <div class="cat-arr">›</div>
    </div>`;
  }).join('');
  const hc = document.getElementById('heroCatCount');
  if (hc) hc.textContent = shown.length;
}

function renderHomeMcqs() {
  const el = document.getElementById('homeMcqList');
  if (!el) return;
  // Latest first — sort by timestamp then id descending
  const sorted = [...DB.mcqs].sort((a,b) => {
    const ta = a.ts || a.id || 0; const tb = b.ts || b.id || 0;
    return String(tb).localeCompare(String(ta));
  });
  const all = sorted.length ? [...sorted, ...DB.sampleMcqs].slice(0,6) : DB.sampleMcqs.slice(0,6);
  if (!all.length) { el.innerHTML='<div style="text-align:center;padding:20px;color:var(--text3);">No MCQs yet.</div>'; return; }
  el.innerHTML = all.map((m,i) => {
    const cat = DB.cats.find(c => c.id === m.cat);
    return `<div class="mcq-card" onclick="openMcqFromHome(${i})">
      <div class="mcq-num">#Q${i+1}</div>
      <div class="mcq-body">
        <div class="mcq-q">${m.q}</div>
        <div class="mcq-meta">
          <span class="tag tag-cat">${cat?.name||m.cat}</span>
          <span class="tag tag-${m.diff==='Hard'?'h':m.diff==='Medium'?'m':'e'}">${m.diff}</span>
          <span class="mcq-views">👁 ${(m.views||0).toLocaleString()}</span>
        </div>
      </div>
      ${saveBtnHtml('mcq',m.id,m.q,cat?.name||m.cat,"openMcqFromHome("+i+")")}
    </div>`;
  }).join('');
}

function openMcqFromHome(idx) {
  const sorted = [...DB.mcqs].sort((a,b) => {
    const ta = a.ts || a.id || 0; const tb = b.ts || b.id || 0;
    return String(tb).localeCompare(String(ta));
  });
  const all = sorted.length ? [...sorted, ...DB.sampleMcqs].slice(0,6) : DB.sampleMcqs.slice(0,6);
  curMcqList = all;
  curMcqIdx = idx;
  if (all[idx]) openMcqDetail(all[idx].id, idx);
}

function renderHomeBlog() {
  const el = document.getElementById('homeBlogGrid');
  if (!el) return;
  // Latest first
  const sorted = [...DB.articles].sort((a,b) => {
    const ta = a.ts || a.id || 0; const tb = b.ts || b.id || 0;
    return String(tb).localeCompare(String(ta));
  });
  const all = sorted.slice(0,3);
  if (!all.length) { el.innerHTML='<div style="color:var(--text3);padding:20px;">No articles yet.</div>'; return; }
  el.innerHTML = all.map(a =>
    `<div class="blog-card" onclick="openBlogPost('${a.id}')">
      <div class="blog-thumb" style="background:${a.bg||'linear-gradient(135deg,var(--forest),var(--forest2))'};">${a.emoji||'📝'}</div>
      <div class="blog-body">
        <span class="blog-tag">${a.cat}</span>
        <div class="blog-title">${a.title}</div>
        <div class="blog-meta">${a.date}${a.author?' · '+a.author:''}</div>
        <div style="margin-top:8px;">${saveBtnHtml('article',a.id,a.title,a.cat,"openBlogPost('"+a.id+"')")}</div>
      </div>
    </div>`).join('');
}

function renderBlogPage() {
  const el = document.getElementById('blogGrid');
  if (!el) return;
  const all = [...DB.articles];
  if (!all.length) { el.innerHTML='<div style="color:var(--text3);padding:20px;">No articles yet.</div>'; return; }
  el.innerHTML = all.map(a =>
    `<div class="blog-card" onclick="openBlogPost('${a.id}')">
      <div class="blog-thumb" style="background:${a.bg||'linear-gradient(135deg,var(--forest),var(--forest2))'};">${a.emoji||'📝'}</div>
      <div class="blog-body">
        <span class="blog-tag">${a.cat}</span>
        <div class="blog-title">${a.title}</div>
        <div class="blog-meta">${a.date}${a.author?' · '+a.author:''}</div>
        <div style="margin-top:8px;">${saveBtnHtml('article',a.id,a.title,a.cat,"openBlogPost('"+a.id+"')")}</div>
      </div>
    </div>`).join('');
}

function openBlogPost(id) {
  const a = [...DB.articles].find(x => x.id === id);
  if (!a) return;
  document.getElementById('postBread').innerHTML = `<span onclick="go('home')" style="color:var(--em);cursor:pointer;">Home</span> › <span onclick="go('blog')" style="color:var(--em);cursor:pointer;">Blog</span> › ${a.title.substring(0,40)}…`;
  const thumbEl = document.getElementById('postThumb');
  if (a.img) {
    // Show actual uploaded image
    thumbEl.innerHTML = '';
    thumbEl.style.background = '';
    thumbEl.style.padding = '0';
    thumbEl.style.height = '220px';
    thumbEl.style.overflow = 'hidden';
    thumbEl.innerHTML = `<img src="${a.img}" style="width:100%;height:220px;object-fit:cover;display:block;">`;
  } else {
    thumbEl.innerHTML = a.emoji||'📝';
    thumbEl.style.background = a.bg||'linear-gradient(135deg,var(--forest),var(--forest2))';
  }
  document.getElementById('postTag').textContent = a.cat;
  document.getElementById('postTitle').textContent = a.title;
  document.getElementById('postMeta').textContent = (a.author||'Vokomoon Admin') + ' · ' + (a.date||new Date().toLocaleDateString());
  document.getElementById('postContent').innerHTML = a.content || '<p>'+a.excerpt+'</p>';
  go('blogpost');
}

function refreshNavCats() {
  const nav = document.getElementById('mainNav');
  if (!nav) return;
  nav.querySelectorAll('.dyn-nav').forEach(b => b.remove());
  const blogBtn = document.getElementById('navBlog');
  if (!blogBtn) return;
  DB.cats.filter(c => c.show === true || c.show === 'yes').forEach(c => {
    const btn = document.createElement('button');
    btn.className = 'nav-btn dyn-nav';
    btn.textContent = c.icon + ' ' + c.name;
    btn.onclick = () => openCatPage(c.id);
    blogBtn.insertAdjacentElement('beforebegin', btn);
  });
}

function refreshFooterCats() {
  const el = document.getElementById('footerCatLinks');
  if (!el) return;
  const shown = DB.cats.filter(c => c.show === true || c.show === 'yes').slice(0, 8);
  el.innerHTML = shown.map(c =>
    `<a onclick="openCatPage('${c.id}')">${c.icon} ${c.name}</a>`).join('');
}

/* ══════ CATEGORY SELECTS ══════ */
function refreshAllCatSelects() {
  // Fill every dyn-cat select (works even if hidden)
  document.querySelectorAll('select.dyn-cat, select[id*="Cat"], select[id*="cat"]').forEach(sel => {
    if (!sel.classList.contains('dyn-cat') && sel.id !== 'askCatSel') return;
    const isParent = sel.id === 'subCatParent';
    const cur = sel.value;
    sel.innerHTML = `<option value="">${isParent?'Select Main Category…':'Select Category…'}</option>`;
    DB.cats.forEach(c => {
      const opt = document.createElement('option');
      opt.value = c.name;
      opt.textContent = c.icon + ' ' + c.name;
      sel.appendChild(opt);
    });
    if (cur) sel.value = cur;
  });
  // Ask page category select
  const askSel = document.getElementById('askCatSel');
  if (askSel) {
    const cur = askSel.value;
    askSel.innerHTML = '<option value="">Select…</option>';
    DB.cats.forEach(c => {
      const o = document.createElement('option');
      o.value = c.name;
      o.textContent = c.icon + ' ' + c.name;
      askSel.appendChild(o);
    });
    if (cur) askSel.value = cur;
  }
}

/* ══════ ADMIN LOGIN ══════ */
let admLoggedIn = false;

async function doAdmLogin() {
  const p = document.getElementById('lockInp').value;
  if (!p) { document.getElementById('lockErr').style.display = 'block'; return; }
  
  // Disable button during check
  const btn = document.querySelector('.lock-btn');
  if (btn) { btn.disabled = true; btn.textContent = '⏳ Checking…'; }
  
  try {
    const r = await fetch(API_URL + '?action=verify_admin', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({password: p})
    });
    const res = await r.json();
    
    if (res.success) {
      admLoggedIn = true;
      // Store token in memory (not localStorage — security)
      window._adminToken = res.token;
      showAdmDash();
      toast('🔐 Welcome Ateaq!','s');
      document.getElementById('lockErr').style.display = 'none';
    } else {
      document.getElementById('lockErr').style.display = 'block';
      document.getElementById('lockInp').value = '';
    }
  } catch(e) {
    // Fallback: if API fails, show error
    document.getElementById('lockErr').style.display = 'block';
    toast('⚠️ Server error — check api.php', 'e');
  }
  
  if (btn) { btn.disabled = false; btn.textContent = '🔓 Access Admin Panel'; }
}

function showAdmDash() {
  document.getElementById('admLock').style.display = 'none';
  document.getElementById('admDash').style.display = 'block';
  refreshAllCatSelects();
  refreshSSCMainDropdown();
  renderCatTable();
  renderMcqTable();
  updateDashStats();
  updateUsersList();
  logAct('🔐','Admin panel accessed','st-pub','Login');
}

function doAdmLogout() {
  admLoggedIn = false;
  logAct('👋','Admin logged out','st-dft','Logout');
  document.getElementById('admDash').style.display = 'none';
  document.getElementById('admLock').style.display = '';
  document.getElementById('lockInp').value = '';
  document.getElementById('lockErr').style.display = 'none';
  toast('👋 Logged out','i');
}

function admTab(t, el) {
  document.querySelectorAll('.adm-tab').forEach(x => x.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(x => x.classList.remove('active'));
  const pg = document.getElementById('admt-' + t);
  if (pg) pg.classList.add('active');
  if (el) el.classList.add('active');
  const titles = {dashboard:'📊 Dashboard',mcqCreate:'✏️ Create MCQs',mcqManage:'📋 Manage MCQs',setPublish:'📦 Set Publish',article:'📰 Publish Article',pdf:'📄 Publish PDF',video:'🎥 Video Classes',notes:'📓 Publish Notes',questions:'❓ Asked Questions',allContent:'🗂️ All Content',categories:'🏷️ Categories',users:'👥 Users',settings:'⚙️ Settings'};
  const tp = document.getElementById('admTitle');
  if (tp) tp.textContent = titles[t]||t;
  if (t === 'questions') renderQuestionsAdmin();
  // Always refresh category selects when switching tabs
  refreshAllCatSelects();
  refreshPTDropdowns();
  if (t === 'categories') refreshSSCMainDropdown();
  if (t === 'mcqManage') renderMcqTable();
  if (t === 'allContent') renderAllContent();
  if (t === 'dashboard') updateDashStats();
  if (t === 'users') updateUsersList();
}

function admTabGo(t) {
  document.querySelectorAll('.adm-tab').forEach(x => x.classList.remove('active'));
  document.querySelectorAll('.sb-item').forEach(x => x.classList.remove('active'));
  const pg = document.getElementById('admt-' + t);
  if (pg) pg.classList.add('active');
  const titles = {mcqCreate:'✏️ Create MCQs',article:'📰 Publish Article',pdf:'📄 Publish PDF',categories:'🏷️ Categories'};
  const tp = document.getElementById('admTitle');
  if (tp) tp.textContent = titles[t]||t;
}

function toggleMode() {
  admLight = !admLight;
  document.getElementById('admRoot').classList.toggle('light', admLight);
  document.getElementById('modeIcon').textContent = admLight ? '☀️' : '🌙';
  document.getElementById('modeLbl').textContent = admLight ? 'Light' : 'Dark';
  toast((admLight?'☀️ Light':'🌙 Dark')+' Mode ON','i');
}

/* ══════ PUBLISH MCQs ══════ */

// Helper: update MCQ counts on main/sub/subsub cat objects
function updateMcqCounts(pt) {
  if (pt.type === 'subsub') {
    const sscObj = DB.subsubcats.find(x => x.id === pt.catId);
    if (sscObj) {
      sscObj.mcqs = (sscObj.mcqs||0) + 1;
      const subObj = DB.subcats.find(s => s.id === sscObj.parent);
      if (subObj) subObj.mcqs = (subObj.mcqs||0) + 1;
      const mainObj = DB.cats.find(c => c.id === sscObj.mainParent);
      if (mainObj) mainObj.mcqs = (mainObj.mcqs||0) + 1;
    }
  } else if (pt.type === 'sub') {
    const subObj = DB.subcats.find(s => s.id === pt.catId);
    if (subObj) {
      subObj.mcqs = (subObj.mcqs||0) + 1;
      const mainObj = DB.cats.find(c => c.id === subObj.parent);
      if (mainObj) mainObj.mcqs = (mainObj.mcqs||0) + 1;
    }
  } else {
    const catObj = DB.cats.find(c => c.id === pt.catId || c.name === pt.catName);
    if (catObj) catObj.mcqs = (catObj.mcqs||0) + 1;
  }
}

function addMcqBlk() {
  mcqBlkN++;
  const n = mcqBlkN;
  const letters = ['A','B','C','D'];

  // Build the full duplicated setup: publish target + question block
  const ptHtml = `
  <div class="adm-form" style="margin-top:22px;margin-bottom:0;background:rgba(34,201,123,.06);border:1.5px solid rgba(34,201,123,.25);" id="ptWrap${n}">
    <div style="font-size:13px;font-weight:800;color:var(--aa);margin-bottom:14px;display:flex;align-items:center;gap:8px;">📍 Publish Target — Question #${n}</div>
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:14px;">
      <div id="ptBox${n}_1" class="pt-box pt-active" onclick="selectPTn(${n},1)" style="border:2px solid var(--aa);background:rgba(34,201,123,.12);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;">
        <div style="font-size:13px;font-weight:800;color:var(--aa);margin-bottom:10px;">① Main Category</div>
        <select class="adm-sel" id="pt${n}_1Cat" onclick="event.stopPropagation()">
          ${DB.cats.map(c=>`<option value="${c.name}">${c.icon||''} ${c.name}</option>`).join('')}
        </select>
      </div>
      <div id="ptBox${n}_2" class="pt-box" onclick="selectPTn(${n},2)" style="border:2px solid var(--abr);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;opacity:.55;">
        <div style="font-size:13px;font-weight:800;color:var(--at);margin-bottom:10px;">② Sub Category</div>
        <select class="adm-sel" id="pt${n}_2Main" onclick="event.stopPropagation()" onchange="loadPTnSubs(${n})" style="margin-bottom:8px;">
          <option value="">Select Main Category…</option>
          ${DB.cats.map(c=>`<option value="${c.name}">${c.icon||''} ${c.name}</option>`).join('')}
        </select>
        <select class="adm-sel" id="pt${n}_2Sub" onclick="event.stopPropagation()">
          <option value="">— Pehle Main Select Karein —</option>
        </select>
      </div>
      <div id="ptBox${n}_3" class="pt-box" onclick="selectPTn(${n},3)" style="border:2px solid var(--abr);border-radius:12px;padding:14px;cursor:pointer;transition:.2s;opacity:.55;">
        <div style="font-size:13px;font-weight:800;color:var(--at);margin-bottom:10px;">③ Sub-Sub Category</div>
        <select class="adm-sel" id="pt${n}_3Main" onclick="event.stopPropagation()" onchange="loadPTnSSCSubs(${n})" style="margin-bottom:8px;">
          <option value="">Select Main Category…</option>
          ${DB.cats.map(c=>`<option value="${c.name}">${c.icon||''} ${c.name}</option>`).join('')}
        </select>
        <select class="adm-sel" id="pt${n}_3Sub" onclick="event.stopPropagation()" onchange="loadPTnSSC(${n})" style="margin-bottom:8px;">
          <option value="">— Pehle Main Select Karein —</option>
        </select>
        <select class="adm-sel" id="pt${n}_3SSC" onclick="event.stopPropagation()">
          <option value="">— Pehle Sub Select Karein —</option>
        </select>
      </div>
    </div>
  </div>`;

  const blockHtml = `<div class="mcq-blk" id="mcqBlk${n}" style="margin-top:0;">
    <div class="mcq-blk-head"><div class="mcq-blk-num">Question #${n}</div><button class="ab ab-d" onclick="remMcqBlkFull(${n})">✕ Remove</button></div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
      <div class="adm-f" style="margin-bottom:0;"><label>Difficulty</label><select class="adm-sel" id="mcqDiff${n}"><option>Easy</option><option>Medium</option><option>Hard</option></select></div>
      <div class="adm-f" style="margin-bottom:0;"><label>Set #</label><input type="number" class="adm-inp" id="mcqSet${n}" placeholder="1" min="1" value="1"></div>
    </div>
    <div class="adm-f"><label>Question Text *</label>
      <div class="ed-toolbar" style="margin-bottom:0;border-radius:8px 8px 0 0;">
        <button class="ed-btn" onclick="expCmd('q${n}','bold')"><b>B</b></button>
        <button class="ed-btn" onclick="expCmd('q${n}','italic')"><i>I</i></button>
        <button class="ed-btn" onclick="expCmd('q${n}','underline')"><u>U</u></button>
        <div class="ed-sep"></div>
        <button class="ed-btn" onclick="expCmd('q${n}','insertUnorderedList')">• List</button>
        <button class="ed-btn" onclick="expCmd('q${n}','insertOrderedList')">1. List</button>
        <div class="ed-sep"></div>
        <button class="ed-btn" onclick="expCmd('q${n}','undo')">↩</button>
        <button class="ed-btn" onclick="expCmd('q${n}','redo')">↪</button>
      </div>
      <div class="ed-area" id="mcqQ${n}" contenteditable="true" spellcheck="true" style="min-height:70px;border-radius:0 0 8px 8px;" placeholder="Write question…"></div>
    </div>
    <div class="adm-f"><label>Answer Options * <span style="font-weight:400;opacity:.6;">(⭕ Radio = correct answer)</span></label>
      <div id="mcqOpts${n}">${letters.map((l,i)=>`<div class="opt-row"><div class="opt-let">${l}</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option ${l}…"><input type="radio" name="mcqCorr${n}" class="opt-radio"${i===0?' checked':''}></div>`).join('')}</div>
      <div class="add-opt" onclick="addOpt(${n})">＋ Add Option (max 5)</div>
    </div>
    <div class="adm-f" style="margin-bottom:0;">
      <label>Explanation (Optional) — Rich Editor</label>
      <div class="ed-toolbar" style="margin-bottom:0;border-radius:8px 8px 0 0;">
        <button class="ed-btn" onclick="expCmd(${n},'formatBlock','<h3>')" style="font-weight:800;">H3</button>
        <button class="ed-btn" onclick="expCmd(${n},'formatBlock','<p>')">¶</button>
        <div class="ed-sep"></div>
        <button class="ed-btn" onclick="expCmd(${n},'bold')"><b>B</b></button>
        <button class="ed-btn" onclick="expCmd(${n},'italic')"><i>I</i></button>
        <button class="ed-btn" onclick="expCmd(${n},'underline')"><u>U</u></button>
        <div class="ed-sep"></div>
        <button class="ed-btn" onclick="expCmd(${n},'insertUnorderedList')">• List</button>
        <button class="ed-btn" onclick="expCmd(${n},'insertOrderedList')">1. List</button>
        <div class="ed-sep"></div>
        <button class="ed-btn" onclick="expCmd(${n},'undo')">↩</button>
        <button class="ed-btn" onclick="expCmd(${n},'redo')">↪</button>
      </div>
      <div class="ed-area" id="mcqExp${n}" contenteditable="true" spellcheck="true" style="min-height:80px;border-radius:0 0 8px 8px;" placeholder="Explain the correct answer…"></div>
    </div>
    <div class="adm-f" style="margin-top:10px;margin-bottom:0;padding:10px 12px;background:rgba(245,200,66,.07);border:1px solid rgba(245,200,66,.2);border-radius:9px;">
      <label style="margin-bottom:5px;color:var(--ag);">⏰ Schedule (Optional — blank = publish now)</label>
      <input type="datetime-local" class="adm-inp sched-inp" id="mcqSched${n}" style="width:auto;">
    </div>
    <div style="margin-top:12px;">
      <button class="ab ab-p" style="width:100%;padding:11px;font-size:14px;justify-content:center;" onclick="publishSingleMcq(${n})">🚀 Publish Question #${n}</button>
    </div>
  </div>`;

  // Wrap pt+block together
  const wrapper = document.createElement('div');
  wrapper.id = 'mcqFullBlk' + n;
  wrapper.innerHTML = ptHtml + blockHtml;
  document.getElementById('mcqBlocks').appendChild(wrapper);
  document.getElementById('mcqRem1').style.display = 'inline-flex';
  toast('Question #'+n+' setup ready!','s');
}

function remMcqBlk(n) {
  document.getElementById('mcqBlk'+n)?.remove();
  toast('Question removed','i');
}

function remMcqBlkFull(n) {
  document.getElementById('mcqFullBlk'+n)?.remove();
  toast('Question #'+n+' removed','i');
}

function selectPTn(n, sel) {
  [1,2,3].forEach(i => {
    const box = document.getElementById('ptBox'+n+'_'+i);
    if (!box) return;
    if (i === sel) { box.classList.add('pt-active'); box.style.border='2px solid var(--aa)'; box.style.background='rgba(34,201,123,.12)'; box.style.opacity='1'; }
    else { box.classList.remove('pt-active'); box.style.border='2px solid var(--abr)'; box.style.background=''; box.style.opacity='.55'; }
  });
}

function loadPTnSubs(n) {
  const mainId = DB.cats.find(c => c.name === document.getElementById('pt'+n+'_2Main')?.value)?.id;
  const sub = document.getElementById('pt'+n+'_2Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => { sub.innerHTML += `<option value="${s.id}">${s.name}</option>`; });
}

function loadPTnSSCSubs(n) {
  const mainId = DB.cats.find(c => c.name === document.getElementById('pt'+n+'_3Main')?.value)?.id;
  const sub = document.getElementById('pt'+n+'_3Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => { sub.innerHTML += `<option value="${s.id}">${s.name}</option>`; });
  document.getElementById('pt'+n+'_3SSC').innerHTML = '<option value="">— Pehle Sub Select Karein —</option>';
}

function loadPTnSSC(n) {
  const subId = document.getElementById('pt'+n+'_3Sub')?.value;
  const ssc = document.getElementById('pt'+n+'_3SSC');
  if (!ssc) return;
  ssc.innerHTML = '<option value="">Select Sub-Sub-Category…</option>';
  DB.subsubcats.filter(x => x.parent === subId).forEach(x => { ssc.innerHTML += `<option value="${x.id}">${x.name}</option>`; });
}

function getPublishTargetN(n) {
  // For question #n (n>=2), use per-block PT selectors
  const activeBox = document.querySelector(`#ptBox${n}_1.pt-active, #ptBox${n}_2.pt-active, #ptBox${n}_3.pt-active`);
  if (!activeBox) return null;
  const which = activeBox.id.replace('ptBox'+n+'_','');
  if (which === '1') {
    const catSel = document.getElementById('pt'+n+'_1Cat');
    if (!catSel || !catSel.value) return null;
    const catObj = DB.cats.find(c => c.name === catSel.value);
    return { catName: catSel.value, catId: catObj?.id || catSel.value.toLowerCase().replace(/[^a-z0-9]/g,'-'), type:'main' };
  } else if (which === '2') {
    const sub = document.getElementById('pt'+n+'_2Sub')?.value;
    if (!sub) return null;
    const subObj = DB.subcats.find(s => s.id === sub);
    const mainObj = DB.cats.find(c => c.id === subObj?.parent);
    return { catName: subObj?.name || sub, catId: sub, type:'sub', parentName: mainObj?.name };
  } else if (which === '3') {
    const ssc = document.getElementById('pt'+n+'_3SSC')?.value;
    if (!ssc) return null;
    const sscObj = DB.subsubcats.find(x => x.id === ssc);
    const subObj = DB.subcats.find(s => s.id === sscObj?.parent);
    const mainObj = DB.cats.find(c => c.id === sscObj?.mainParent);
    return { catName: sscObj?.name || ssc, catId: ssc, type:'subsub', parentName: subObj?.name, mainParentName: mainObj?.name };
  }
  return null;
}

function publishSingleMcq(n) {
  const pt = getPublishTargetN(n);
  if (!pt) { toast('⚠️ Publish target select karein!','e'); return; }
  const blk = document.getElementById('mcqBlk'+n);
  if (!blk) return;
  const qEl = document.getElementById('mcqQ'+n);
  const q = qEl ? (qEl.innerText||'').trim() : '';
  const qHtml = qEl ? qEl.innerHTML.trim() : '';
  if (!q) { toast('⚠️ Question likhein!','e'); qEl?.focus(); return; }
  const optInputs = Array.from(blk.querySelectorAll('.opt-row input[type="text"]'));
  const opts = optInputs.map(inp => inp.value.trim() || 'Option');
  const radios = Array.from(blk.querySelectorAll('.opt-radio'));
  const correct = radios.findIndex(r => r.checked);
  const diff = document.getElementById('mcqDiff'+n)?.value || 'Easy';
  const expEl = document.getElementById('mcqExp'+n);
  const exp = expEl ? (expEl.innerHTML || '') : '';
  const set = parseInt(document.getElementById('mcqSet'+n)?.value)||1;
  const id = 'm' + Date.now() + Math.random().toString(36).substr(2,4);
  DB.mcqs.push({id, cat:pt.catId, catName:pt.catName, q: qHtml||q, opts, correct:correct>=0?correct:0, diff, exp, set, date:new Date().toLocaleDateString(), views:0});
  updateMcqCounts(pt);
  renderHomeMcqs(); renderHomeCats(); renderMcqTable(); updateDashStats();
  addToAllContent('mcq','❓','1 MCQ — '+pt.catName);
  logAct('✏️','1 MCQ published — '+pt.catName,'st-pub','Published');
  if(qEl) qEl.innerHTML='';
  if(expEl) expEl.innerHTML='';
  optInputs.forEach(inp => inp.value='');
  toast('✅ Question #'+n+' "'+pt.catName+'" mein live ho gaya!','s');
  saveDB(); renderAllContent();
}

// Publish Question #1 individually (uses shared PT selectors)
function publishSingleMcqFirst() {
  const pt = getPublishTarget('pt');
  if (!pt) { toast('⚠️ Publish target select karein!','e'); return; }
  const blk = document.getElementById('mcqBlk1');
  if (!blk) return;
  const qEl = document.getElementById('mcqQ1');
  const q = qEl ? (qEl.innerText||'').trim() : '';
  const qHtml = qEl ? qEl.innerHTML.trim() : '';
  if (!q) { toast('⚠️ Question likhein!','e'); qEl?.focus(); return; }
  const optInputs = Array.from(blk.querySelectorAll('.opt-row input[type="text"]'));
  const opts = optInputs.map(inp => inp.value.trim() || 'Option');
  const radios = Array.from(blk.querySelectorAll('.opt-radio'));
  const correct = radios.findIndex(r => r.checked);
  const diff = document.getElementById('mcqDiff1')?.value || 'Easy';
  const expEl = document.getElementById('mcqExp1');
  const exp = expEl ? (expEl.innerHTML || '') : '';
  const set = parseInt(document.getElementById('mcqSet1')?.value)||1;
  const id = 'm' + Date.now() + Math.random().toString(36).substr(2,4);
  DB.mcqs.push({id, cat:pt.catId, catName:pt.catName, q: qHtml||q, opts, correct:correct>=0?correct:0, diff, exp, set, date:new Date().toLocaleDateString(), views:0});
  updateMcqCounts(pt);
  renderHomeMcqs(); renderHomeCats(); renderMcqTable(); updateDashStats();
  addToAllContent('mcq','❓','1 MCQ — '+pt.catName);
  logAct('✏️','Question #1 published — '+pt.catName,'st-pub','Published');
  if(qEl) qEl.innerHTML='';
  if(expEl) expEl.innerHTML='';
  optInputs.forEach(inp => inp.value='');
  toast('✅ Question #1 "'+pt.catName+'" mein live ho gaya!','s');
  saveDB(); renderAllContent();
}

function addOpt(n) {
  const w = document.getElementById('mcqOpts'+n); if (!w) return;
  const rows = w.querySelectorAll('.opt-row').length;
  if (rows >= 5) { toast('Max 5 options!','e'); return; }
  const L = ['A','B','C','D','E'];
  w.insertAdjacentHTML('beforeend',
    `<div class="opt-row"><div class="opt-let">${L[rows]}</div><input type="text" class="adm-inp" style="flex:1;" placeholder="Option ${L[rows]}…"><input type="radio" name="mcqCorr${n}" class="opt-radio"><button style="width:24px;height:24px;border:none;background:rgba(255,107,91,.12);color:#FF6B5B;border-radius:6px;cursor:pointer;flex-shrink:0;" onclick="this.parentElement.remove()">−</button></div>`);
}

function getPublishTarget(prefix) {
  // prefix = 'pt' for MCQ, 'spt' for Set, 'pdf','vid','notes','art' for others
  const activePT = document.querySelector(`#${prefix}Box1.pt-active, #${prefix}Box2.pt-active, #${prefix}Box3.pt-active`);
  if (!activePT) return null;
  const which = activePT.id.replace(prefix+'Box','');

  if (which === '1') {
    const cat = document.getElementById(prefix+'1Cat')?.value?.trim();
    if (!cat) return null;
    const catObj = DB.cats.find(c => c.name === cat);
    return { catName: cat, catId: catObj?.id || cat.toLowerCase().replace(/[^a-z0-9]/g,'-'), type:'main' };
  } else if (which === '2') {
    const sub = document.getElementById(prefix+'2Sub')?.value;
    if (!sub) return null;
    const subObj = DB.subcats.find(s => s.id === sub);
    const mainObj = DB.cats.find(c => c.id === subObj?.parent);
    return { catName: subObj?.name || sub, catId: sub, type:'sub', parentId: subObj?.parent, parentName: mainObj?.name };
  } else if (which === '3') {
    const ssc = document.getElementById(prefix+'3SSC')?.value;
    if (!ssc) return null;
    const sscObj = DB.subsubcats.find(x => x.id === ssc);
    const subObj = DB.subcats.find(s => s.id === sscObj?.parent);
    const mainObj = DB.cats.find(c => c.id === sscObj?.mainParent);
    return { catName: sscObj?.name || ssc, catId: ssc, type:'subsub', parentId: sscObj?.parent, mainParentId: sscObj?.mainParent, parentName: subObj?.name, mainParentName: mainObj?.name };
  }
  return null;
}

let curPT = 1; // current publish target selection for MCQ tab
function selectPT(n) {
  [1,2,3].forEach(i => {
    const box = document.getElementById('ptBox'+i);
    if (!box) return;
    if (i === n) {
      box.classList.add('pt-active');
      box.style.border = '2px solid var(--aa)';
      box.style.background = 'rgba(34,201,123,.12)';
      box.style.opacity = '1';
    } else {
      box.classList.remove('pt-active');
      box.style.border = '2px solid var(--abr)';
      box.style.background = '';
      box.style.opacity = '.55';
    }
  });
  curPT = n;
}

function loadPT2Subs() {
  const mainId = DB.cats.find(c => c.name === document.getElementById('pt2Main')?.value)?.id;
  const sub = document.getElementById('pt2Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => {
    sub.innerHTML += `<option value="${s.id}">${s.name}</option>`;
  });
}

function loadPT3Subs() {
  const mainId = DB.cats.find(c => c.name === document.getElementById('pt3Main')?.value)?.id;
  const sub = document.getElementById('pt3Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => {
    sub.innerHTML += `<option value="${s.id}">${s.name}</option>`;
  });
  document.getElementById('pt3SSC').innerHTML = '<option value="">— Pehle Sub Select Karein —</option>';
}

function loadPT3SSC() {
  const subId = document.getElementById('pt3Sub')?.value;
  const ssc = document.getElementById('pt3SSC');
  if (!ssc) return;
  ssc.innerHTML = '<option value="">Select Sub-Sub-Category…</option>';
  DB.subsubcats.filter(x => x.parent === subId).forEach(x => {
    ssc.innerHTML += `<option value="${x.id}">${x.name}</option>`;
  });
}

// Generic PT selectors for PDF/Video/Notes/Article/Set tabs
function selectGenPT(type, n) {
  const prefix = type+'PT';
  [1,2,3].forEach(i => {
    const box = document.getElementById(type+'PTBox'+i);
    if (!box) return;
    if (i === n) {
      box.classList.add('pt-active');
      box.style.border = '2px solid var(--aa)';
      box.style.background = 'rgba(34,201,123,.12)';
      box.style.opacity = '1';
    } else {
      box.classList.remove('pt-active');
      box.style.border = '2px solid var(--abr)';
      box.style.background = '';
      box.style.opacity = '.55';
    }
  });
}

function loadGenPTSubs(type, n) {
  const mainSel = document.getElementById(type+'PT2Main');
  const mainId = DB.cats.find(c => c.name === mainSel?.value)?.id;
  const sub = document.getElementById(type+'PT2Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => {
    sub.innerHTML += `<option value="${s.id}">${s.name}</option>`;
  });
}

function loadGenPTSSCMains(type) {
  const mainSel = document.getElementById(type+'PT3Main');
  const mainId = DB.cats.find(c => c.name === mainSel?.value)?.id;
  const sub = document.getElementById(type+'PT3Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s => s.parent === mainId).forEach(s => {
    sub.innerHTML += `<option value="${s.id}">${s.name}</option>`;
  });
  const ssc = document.getElementById(type+'PT3SSC');
  if (ssc) ssc.innerHTML = '<option value="">— Pehle Sub —</option>';
}

function loadGenPTSSC(type) {
  const subId = document.getElementById(type+'PT3Sub')?.value;
  const ssc = document.getElementById(type+'PT3SSC');
  if (!ssc) return;
  ssc.innerHTML = '<option value="">Select Sub-Sub-Category…</option>';
  DB.subsubcats.filter(x => x.parent === subId).forEach(x => {
    ssc.innerHTML += `<option value="${x.id}">${x.name}</option>`;
  });
}

// Generic get publish target for any type
function getGenPT(type) {
  const activePT = document.querySelector(`#${type}PTBox1.pt-active, #${type}PTBox2.pt-active, #${type}PTBox3.pt-active`);
  if (!activePT) return null;
  const which = activePT.id.replace(type+'PTBox','');
  if (which === '1') {
    const cat = document.getElementById(type+'PT1Cat')?.value?.trim();
    if (!cat) return null;
    const catObj = DB.cats.find(c => c.name === cat);
    return { catName: cat, catId: catObj?.id || cat.toLowerCase().replace(/[^a-z0-9]/g,'-') };
  } else if (which === '2') {
    const sub = document.getElementById(type+'PT2Sub')?.value;
    if (!sub) return null;
    const subObj = DB.subcats.find(s => s.id === sub);
    const mainObj = DB.cats.find(c => c.id === subObj?.parent);
    return { catName: subObj?.name || sub, catId: sub, parentName: mainObj?.name };
  } else if (which === '3') {
    const ssc = document.getElementById(type+'PT3SSC')?.value;
    if (!ssc) return null;
    const sscObj = DB.subsubcats.find(x => x.id === ssc);
    const subObj = DB.subcats.find(s => s.id === sscObj?.parent);
    const mainObj = DB.cats.find(c => c.id === sscObj?.mainParent);
    return { catName: sscObj?.name || ssc, catId: ssc, parentName: subObj?.name, mainParentName: mainObj?.name };
  }
  return null;
}

// SPT (Set Publish Target) selectors
function selectSPT(n) {
  [1,2,3].forEach(i => {
    const box = document.getElementById('sptBox'+i);
    if (!box) return;
    if (i === n) { box.classList.add('pt-active'); box.style.border='2px solid var(--aa)'; box.style.background='rgba(34,201,123,.12)'; box.style.opacity='1'; }
    else { box.classList.remove('pt-active'); box.style.border='2px solid var(--abr)'; box.style.background=''; box.style.opacity='.55'; }
  });
}
function loadSPT2Subs() {
  const mainId = DB.cats.find(c=>c.name===document.getElementById('spt2Main')?.value)?.id;
  const sub = document.getElementById('spt2Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s=>s.parent===mainId).forEach(s => { sub.innerHTML+=`<option value="${s.id}">${s.name}</option>`; });
}
function loadSPT3Subs() {
  const mainId = DB.cats.find(c=>c.name===document.getElementById('spt3Main')?.value)?.id;
  const sub = document.getElementById('spt3Sub');
  if (!sub) return;
  sub.innerHTML = '<option value="">Select Sub-Category…</option>';
  DB.subcats.filter(s=>s.parent===mainId).forEach(s => { sub.innerHTML+=`<option value="${s.id}">${s.name}</option>`; });
  document.getElementById('spt3SSC').innerHTML='<option value="">— Pehle Sub —</option>';
}
function loadSPT3SSC() {
  const subId = document.getElementById('spt3Sub')?.value;
  const ssc = document.getElementById('spt3SSC');
  if (!ssc) return;
  ssc.innerHTML = '<option value="">Select Sub-Sub-Category…</option>';
  DB.subsubcats.filter(x=>x.parent===subId).forEach(x => { ssc.innerHTML+=`<option value="${x.id}">${x.name}</option>`; });
}

function getSPT() {
  const activePT = document.querySelector('#sptBox1.pt-active, #sptBox2.pt-active, #sptBox3.pt-active');
  if (!activePT) return null;
  const which = activePT.id.replace('sptBox','');
  if (which==='1') {
    const cat = document.getElementById('spt1Cat')?.value?.trim();
    if (!cat) return null;
    const catObj = DB.cats.find(c=>c.name===cat);
    return {catName:cat, catId:catObj?.id||cat.toLowerCase().replace(/[^a-z0-9]/g,'-')};
  } else if (which==='2') {
    const sub = document.getElementById('spt2Sub')?.value;
    if (!sub) return null;
    const subObj = DB.subcats.find(s=>s.id===sub);
    return {catName:subObj?.name||sub, catId:sub};
  } else if (which==='3') {
    const ssc = document.getElementById('spt3SSC')?.value;
    if (!ssc) return null;
    const sscObj = DB.subsubcats.find(x=>x.id===ssc);
    return {catName:sscObj?.name||ssc, catId:ssc};
  }
  return null;
}

function refreshPTDropdowns() {
  // Fill all PT category dropdowns
  const allPTCatSels = ['pt1Cat','spt1Cat','pdfPT1Cat','vidPT1Cat','notesPT1Cat','artPT1Cat',
    'pt2Main','pt3Main','spt2Main','spt3Main','pdfPT2Main','pdfPT3Main',
    'vidPT2Main','vidPT3Main','notesPT2Main','notesPT3Main','artPT2Main','artPT3Main'];
  allPTCatSels.forEach(id => {
    const sel = document.getElementById(id);
    if (!sel) return;
    const cur = sel.value;
    sel.innerHTML = '<option value="">Select Main Category…</option>';
    DB.cats.forEach(c => { sel.innerHTML += `<option value="${c.name}">${c.icon||''} ${c.name}</option>`; });
    if (cur) sel.value = cur;
  });
}

function publishMcqs() {
  // Validate publish target
  const pt = getPublishTarget('pt');
  if (!pt) {
    toast('⚠️ Kripya ek publish target select karein (Main / Sub / Sub-Sub Category)!','e');
    return;
  }
  const activeCount = document.querySelectorAll('#ptBox1.pt-active, #ptBox2.pt-active, #ptBox3.pt-active').length;
  if (activeCount !== 1) { toast('⚠️ Sirf ek category select karein!','e'); return; }

  let count = 0;
  for (let i = 1; i <= mcqBlkN; i++) {
    const blk = document.getElementById('mcqBlk'+i);
    if (!blk) continue;
    const qEl = document.getElementById('mcqQ'+i);
    const q = qEl ? (qEl.value !== undefined ? qEl.value.trim() : (qEl.innerText||qEl.innerHTML||'').trim()) : '';
    const qHtml = qEl ? (qEl.innerHTML !== undefined && !qEl.value ? qEl.innerHTML.trim() : qEl.value ? qEl.value.trim() : '') : '';
    if (!q) { toast('⚠️ Question #'+i+' mein sawal likhein!','e'); document.getElementById('mcqQ'+i)?.focus(); return; }
    const optInputs = Array.from(blk.querySelectorAll('.opt-row input[type="text"]'));
    const opts = optInputs.map(inp => inp.value.trim() || 'Option');
    const radios = Array.from(blk.querySelectorAll('.opt-radio'));
    const correct = radios.findIndex(r => r.checked);
    const diff = document.getElementById('mcqDiff'+i)?.value || 'Easy';
    const expEl = document.getElementById('mcqExp'+i);
    const exp = expEl ? (expEl.innerHTML || expEl.value || '') : '';
    const set = parseInt(document.getElementById('mcqSet'+i)?.value)||1;
    const id = 'm' + Date.now() + Math.random().toString(36).substr(2,4);
    DB.mcqs.push({id, cat:pt.catId, catName:pt.catName, q: qHtml || q, opts, correct:correct>=0?correct:0, diff, exp, set, date:new Date().toLocaleDateString(), views:0});
    // Update cat MCQ count
    updateMcqCounts(pt);
    count++;
  }
  if (count === 0) { toast('⚠️ Koi MCQ publish nahi hua!','e'); return; }
  renderHomeMcqs(); renderHomeCats(); renderMcqTable(); updateDashStats();
  // Refresh category page sets if currently viewing the same category
  if (document.getElementById('page-catpage')?.classList.contains('active')) {
    openCatPage(curSetCatId || pt.catId);
  }
  addToAllContent('mcq','❓', count+' MCQ(s) — '+pt.catName);
  logAct('✏️', count+' MCQ(s) published — '+pt.catName,'st-pub','Published');
  for (let i = 1; i <= mcqBlkN; i++) {
    const qEl = document.getElementById('mcqQ'+i);
    if(qEl) { if(qEl.value!==undefined && qEl.tagName==='TEXTAREA') qEl.value=''; else qEl.innerHTML=''; }
    const eEl = document.getElementById('mcqExp'+i); if(eEl) { eEl.innerHTML=''; if(eEl.value!==undefined)eEl.value=''; }
    const optIns = document.querySelectorAll('#mcqOpts'+i+' input[type="text"]');
    optIns.forEach(inp => inp.value='');
  }
  toast('✅ '+count+' MCQ(s) "'+pt.catName+'" mein live ho gaye!','s');
  saveDB(); renderAllContent();
}

function renderMcqTable() {
  const tbody = document.getElementById('mcqTableBody');
  if (!tbody) return;
  const all = [...DB.mcqs];
  if (!all.length) {
    tbody.innerHTML = '<tr><td colspan="7" style="text-align:center;padding:24px;color:var(--ad);">No MCQs published yet. Create some above!</td></tr>';
    document.getElementById('mcqTableInfo').textContent = '0 MCQs';
    return;
  }
  tbody.innerHTML = all.map((m,i) => {
    const catName = DB.cats.find(c => c.id === m.cat)?.name || m.cat;
    return `<tr>
      <td style="color:var(--ad);">${String(i+1).padStart(3,'0')}</td>
      <td class="td-main" style="max-width:220px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">${m.q.substring(0,55)}…</td>
      <td><span class="chip-a">${catName}</span></td>
      <td><span class="diff-${m.diff==='Hard'?'h':m.diff==='Medium'?'m':'e'}">${m.diff}</span></td>
      <td><span class="st st-pub">Published</span></td>
      <td><input type="datetime-local" class="sched-inp"></td>
      <td><div style="display:flex;gap:5px;">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('mcq','${m.id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delMcq('${m.id}',this)">Del</button>
      </div></td>
    </tr>`;
  }).join('');
  document.getElementById('mcqTableInfo').textContent = all.length + ' MCQs';
}

function delMcq(id, btn) {
  if (!confirm('Delete this MCQ?')) return;
  const i = DB.mcqs.findIndex(m => m.id === id);
  if (i > -1) DB.mcqs.splice(i,1);
  btn.closest('tr').remove();
  renderHomeMcqs();
  updateDashStats();
  logAct('🗑️','MCQ deleted','st-del','Deleted');
  saveDB();
  renderAllContent();
  toast('🗑️ MCQ deleted!','e');
}

/* ══════ PUBLISH ARTICLE ══════ */
function updateSlug() {
  const t = document.getElementById('artTitle')?.value||'';
  const slug = t.toLowerCase().replace(/[^a-z0-9\s]/g,'').replace(/\s+/g,'-').substring(0,60);
  const sp = document.getElementById('slugPrev'); if(sp) sp.textContent = slug||'my-article-url';
  const si = document.getElementById('artSlug'); if(si) si.value = slug;
}

function saveArtDraft() {
  const t = document.getElementById('artTitle')?.value.trim();
  if (!t) { toast('Enter article title first!','e'); return; }
  logAct('💾','Draft saved — '+t,'st-dft','Draft');
  toast('💾 Draft saved: "'+t+'"','i');
}

function publishArt() {
  const pt = getGenPT('art');
  if (!pt) { toast('⚠️ Publish target select karein (Category)!','e'); return; }
  const title = document.getElementById('artTitle')?.value.trim();
  const editorEl = document.getElementById('artEditor');
  const content = editorEl?.innerHTML?.trim();
  const contentText = editorEl?.innerText?.trim();
  const excerpt = document.getElementById('artExcerpt')?.value.trim() || title;
  const author = document.getElementById('artAuthor')?.value.trim() || 'Vokomoon Admin';
  const emojiVal = document.getElementById('artEmoji')?.value.trim();
  if (!title) { toast('⚠️ Article ka Title likhein!','e'); document.getElementById('artTitle')?.focus(); return; }
  if (!contentText) { toast('⚠️ Article ka content likhein!','e'); editorEl?.focus(); return; }
  const id = 'art_' + Date.now();
  const emojis = ['📝','📰','✍️','📖','💡','🏆','📊','🌐','🔥','⭐'];
  const bgs = ['linear-gradient(135deg,#1a3a2a,#2a6a4a)','linear-gradient(135deg,#2a1a3a,#4a2a6a)','linear-gradient(135deg,#1a2a3a,#2a4a6a)','linear-gradient(135deg,#3a1a1a,#6a2a2a)','linear-gradient(135deg,#3a2a1a,#6a4a2a)'];
  const artImg = window._artImgData || null;
  const art = {id, title, cat: pt.catName, catId: pt.catId, excerpt, content, author, date:new Date().toLocaleDateString(), emoji:emojiVal||emojis[DB.articles.length%emojis.length], bg:bgs[DB.articles.length%bgs.length], img: artImg};
  DB.articles.push(art);
  const ac = document.getElementById('artCount'); if(ac) ac.textContent = DB.articles.length;
  const sa = document.getElementById('stArt'); if(sa) sa.textContent = DB.articles.length;
  const listEl = document.getElementById('artList');
  const empty = listEl?.querySelector('.pub-empty'); if(empty) empty.remove();
  listEl?.insertAdjacentHTML('afterbegin',
    `<div class="pub-card">
      <div class="pub-icon" style="background:${art.bg};font-size:20px;">${art.emoji}</div>
      <div class="pub-body"><div class="pub-title">${title}</div><div class="pub-meta">📂 ${pt.catName} · 📅 ${art.date} · ✍️ ${author} <span class="st st-pub" style="margin-left:6px;">Live</span></div></div>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('article','${id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delArt('${id}',this)">Del</button>
      </div>
    </div>`);
  renderHomeBlog(); reDrawArtList(); renderBlogPage();
  addToAllContent('article','📰', title+' ('+pt.catName+')');
  updateDashStats();
  logAct('📰','Article published — '+title,'st-pub','Published');
  document.getElementById('artTitle').value='';
  document.getElementById('artEditor').innerHTML='';
  document.getElementById('artExcerpt').value='';
  document.getElementById('artEmoji').value='';
  document.getElementById('artSlug').value='';
  document.getElementById('slugPrev').textContent='my-article-url';
  document.getElementById('artImgName').textContent='Click to Select Image';
  document.getElementById('artImgPreviewWrap').style.display='none';
  window._artImgData = null;
  toast('✅ Article "'+title+'" live ho gaya!','s');
  saveDB(); renderAllContent();
}

function delArt(id, btn) {
  if (!confirm('Delete this article?')) return;
  const i = DB.articles.findIndex(a => a.id===id); if(i>-1) DB.articles.splice(i,1);
  btn.closest('.pub-card').remove();
  renderHomeBlog();
  renderBlogPage();
  updateDashStats();
  logAct('🗑️','Article deleted','st-del','Deleted');
  saveDB();
  renderAllContent();
  toast('🗑️ Article deleted!','e');
}

/* ══════ PUBLISH PDF/VIDEO/NOTES ══════ */
function publishContent(type) {
  // Get publish target
  const prefixMap = {pdf:'pdf', video:'vid', notes:'notes'};
  const pref = prefixMap[type];
  const pt = getGenPT(pref);
  if (!pt) { toast('⚠️ Publish target select karein (Main/Sub/Sub-Sub Category)!','e'); return; }

  const cfg = {
    pdf:  {title:'pdfTitle',  list:'pdfList',  count:'pdfCount',  icon:'📄', bg:'rgba(74,158,245,.12)'},
    video:{title:'vidTitle',  list:'vidList',  count:'vidCount',  icon:'🎥', bg:'rgba(245,200,66,.12)'},
    notes:{title:'notesTitle',list:'notesList',count:'notesCount',icon:'📓', bg:'rgba(255,107,91,.12)'}
  };
  if (type==='notes' && document.getElementById('nt2')?.classList.contains('active')) {
    cfg.notes.title = 'notesFileTitle';
  }
  const c = cfg[type];
  const titleEl = document.getElementById(c.title);
  const title = titleEl?.value.trim() || (type.charAt(0).toUpperCase()+type.slice(1)+' — '+new Date().toLocaleDateString());
  if (!titleEl?.value.trim()) { toast('⚠️ Title likhein!','e'); titleEl?.focus(); return; }
  if (type==='notes') {
    const nc = document.getElementById('notesContent');
    if (!nc?.value.trim()) { toast('⚠️ Notes ka content likhein!','e'); nc?.focus(); return; }
  }
  const id = type+'_'+Date.now();
  const notesEl = document.getElementById('notesContent');
  const _notesContent = notesEl ? notesEl.value : '';
  const _pdfDesc = document.getElementById('pdfDesc')?.value.trim() || '';
  const _vidDesc = document.getElementById('vidDesc')?.value.trim() || '';
  const _vidUrl  = document.getElementById('vidUrl')?.value.trim() || '';
  const _pdfUrl  = document.getElementById('pdfUrl')?.value.trim() || '';
  const obj = {
    id, title, cat: pt.catName, catId: pt.catId,
    date: new Date().toLocaleDateString(),
    content: type==='notes' ? _notesContent : '',
    desc: type==='pdf' ? _pdfDesc : type==='video' ? _vidDesc : '',
    url: type==='video' ? _vidUrl : type==='pdf' ? _pdfUrl : ''
  };
  if (type==='pdf') DB.pdfs.push(obj);
  else if (type==='video') DB.videos.push(obj);
  else if (type==='notes') DB.notes.push(obj);
  const cntEl = document.getElementById(c.count);
  if (cntEl) cntEl.textContent = parseInt(cntEl.textContent||0)+1;
  const listEl = document.getElementById(c.list);
  const empty = listEl?.querySelector('.pub-empty'); if(empty) empty.remove();
  listEl?.insertAdjacentHTML('afterbegin',
    `<div class="pub-card">
      <div class="pub-icon" style="background:${c.bg};">${c.icon}</div>
      <div class="pub-body"><div class="pub-title">${title}</div><div class="pub-meta">${type.toUpperCase()} · 📂 ${pt.catName} · 📅 ${obj.date} <span class="st st-pub" style="margin-left:6px;">Live</span></div></div>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('${type}','${id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delPub('${type}','${id}',this)">Del</button>
      </div>
    </div>`);
  addToAllContent(type, c.icon, title+' ('+pt.catName+')');
  updateDashStats();
  logAct(c.icon, type.charAt(0).toUpperCase()+type.slice(1)+' published — '+title+' ['+pt.catName+']','st-pub','Published');
  if (type==='pdf') { renderHomePdfs(); reDrawList('pdfList',DB.pdfs,'pdf'); }
  else if (type==='video') { renderHomeVideos(); reDrawList('vidList',DB.videos,'video'); }
  else if (type==='notes') { renderHomeNotes(); reDrawList('notesList',DB.notes,'notes'); }
  if (titleEl) titleEl.value='';
  const _nc = document.getElementById('notesContent'); if(_nc) _nc.value='';
  const _vu = document.getElementById('vidUrl'); if(_vu) _vu.value='';
  const _pu = document.getElementById('pdfUrl'); if(_pu) _pu.value='';
  const _pd = document.getElementById('pdfDesc'); if(_pd) _pd.value='';
  const _vd = document.getElementById('vidDesc'); if(_vd) _vd.value='';
  toast('✅ "'+title+'" published! Live on website.','s');
  saveDB(); renderAllContent();
}

/* ══════ ALL CONTENT ══════ */
function addToAllContent(type, icon, title) {
  const list = document.getElementById('allContentList'); if(!list) return;
  const empty = list.querySelector('.pub-empty'); if(empty) empty.remove();
  const bgs = {mcq:'rgba(34,201,123,.1)',article:'rgba(74,158,245,.1)',pdf:'rgba(74,158,245,.1)',video:'rgba(245,200,66,.1)',notes:'rgba(255,107,91,.1)'};
  list.insertAdjacentHTML('afterbegin',
    `<div class="pub-card" data-type="${type}">
      <div class="pub-icon" style="background:${bgs[type]||'rgba(34,201,123,.1)'};">${icon}</div>
      <div class="pub-body"><div class="pub-title">${title}</div><div class="pub-meta">${type.toUpperCase()} · Published ${new Date().toLocaleDateString()}</div></div>
      <span class="st st-pub">Live</span>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="toast('Editing…','i')">Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="this.closest('.pub-card').remove()">Del</button>
      </div>
    </div>`);
}

function filterContent(type) {
  document.querySelectorAll('[id^="cf-"]').forEach(b => { b.className='ab '+(b.id==='cf-'+type?'ab-p':'ab-o'); });
  document.querySelectorAll('#allContentList .pub-card').forEach(c => {
    c.style.display = (type==='all' || c.dataset.type===type) ? 'flex' : 'none';
  });
}

/* ══════ CATEGORIES ══════ */
function addCategory() {
  const nameEl = document.getElementById('newCatName');
  const colorEl = document.getElementById('newCatColor');
  const showEl = document.getElementById('newCatShow');

  const name = nameEl ? nameEl.value.trim() : '';
  const color = colorEl ? colorEl.value : '#e8f5ee';
  const showVal = showEl ? showEl.value : 'yes';
  const show = (showVal === 'yes');

  if (!name) {
    toast('⚠️ Category ka naam likhein!','e');
    nameEl?.focus();
    return;
  }
  if (DB.cats.find(c => c.name.toLowerCase() === name.toLowerCase())) {
    toast('⚠️ Yeh category pehle se exist karti hai!','e');
    return;
  }

  const id = name.toLowerCase().replace(/\s+/g,'-').replace(/[^a-z0-9\-]/g,'').replace(/-+/g,'-') || ('cat'+Date.now());
  const autoIcons = ['📚','📖','🎯','💡','🏆','📋','🔍','✏️','📊','🌟','💼','🔬','🌍','💻','⚡','🎓','📜','🧪','🧬','🌏'];
  const icon = autoIcons[DB.cats.length % autoIcons.length];

  const newCat = {id, name, icon, color, show, mcqs: 0};
  DB.cats.push(newCat);

  // ✅ Update EVERY part of the website immediately
  renderHomeCats();        // Homepage category cards
  refreshNavCats();        // Nav bar
  refreshFooterCats();     // Footer links
  refreshAllCatSelects(); refreshPTDropdowns(); // All dropdowns in admin
  refreshSSCMainDropdown(); // Sub-sub cat main dropdown
  renderCatTable();        // Categories table
  updateDashStats();       // Dashboard stats

  logAct('🏷️', 'Category added: ' + icon + ' ' + name + (show ? ' ✅ Homepage pe show' : ' 🔒 Hidden'), 'st-sch', 'Category');

  // Clear form
  nameEl.value = '';
  if (colorEl) colorEl.value = '#e8f5ee';
  if (showEl) showEl.value = 'yes';

  if (show) {
    toast('✅ "' + name + '" add ho gayi! Homepage aur Nav bar par live hai.', 's');
  } else {
    toast('✅ "' + name + '" add ho gayi! (Homepage par hidden hai)', 'i');
  }
  saveDB();
}

function addSubCategory() {
  const parent = document.getElementById('subCatParent')?.value;
  const name = document.getElementById('newSubName')?.value.trim();
  const mcqs = parseInt(document.getElementById('newSubCount')?.value)||0;
  if (!parent) { toast('⚠️ Select Main Category!','e'); return; }
  if (!name) { toast('⚠️ Enter sub-category name!','e'); return; }
  const parentCat = DB.cats.find(c => c.name===parent);
  const parentId = parentCat?.id || parent.toLowerCase().replace(/\s+/g,'-');
  const id = name.toLowerCase().replace(/[^a-z0-9]/g,'-')+'_'+parentId;
  DB.subcats.push({id, parent:parentId, name, mcqs});
  renderCatTable();
  refreshSSCMainDropdown();
  logAct('🏷️','Sub-category added — '+name+' under '+parent,'st-sch','Sub-Cat');
  document.getElementById('newSubName').value='';
  document.getElementById('newSubCount').value='';
  toast('✅ "'+name+'" added under '+parent+'!','s');
  saveDB();
}

/* ══ SUB-SUB CATEGORY ══ */
function refreshSSCMainDropdown() {
  const sel = document.getElementById('sscMainCat');
  if (!sel) return;
  const cur = sel.value;
  sel.innerHTML = '<option value="">— All Main Categories —</option>';
  DB.cats.forEach(c => {
    const o = document.createElement('option');
    o.value = c.id;
    o.textContent = c.icon + ' ' + c.name;
    sel.appendChild(o);
  });
  if (cur) sel.value = cur;
  loadSubCatsForSSC();
}

function loadSubCatsForSSC() {
  const mainId = document.getElementById('sscMainCat')?.value;
  const subSel = document.getElementById('sscSubCat');
  if (!subSel) return;
  subSel.innerHTML = '';
  if (!mainId) {
    subSel.innerHTML = '<option value="">— Select Main Category First —</option>';
    return;
  }
  const subs = DB.subcats.filter(s => s.parent === mainId);
  if (!subs.length) {
    subSel.innerHTML = '<option value="">No sub-categories yet</option>';
    return;
  }
  subSel.innerHTML = '<option value="">Select Sub-Category…</option>';
  subs.forEach(s => {
    const o = document.createElement('option');
    o.value = s.id;
    o.textContent = '📌 ' + s.name;
    subSel.appendChild(o);
  });
}

function addSubSubCategory() {
  const mainId = document.getElementById('sscMainCat')?.value;
  const subId  = document.getElementById('sscSubCat')?.value;
  const name   = document.getElementById('newSSCName')?.value.trim();
  const mcqs   = parseInt(document.getElementById('newSSCCount')?.value)||0;
  if (!mainId) { toast('⚠️ Main Category select karein!','e'); return; }
  if (!subId)  { toast('⚠️ Sub-Category select karein!','e'); return; }
  if (!name)   { toast('⚠️ Sub-Sub Category name likhein!','e'); return; }
  const subObj  = DB.subcats.find(s => s.id === subId);
  const mainObj = DB.cats.find(c => c.id === mainId);
  const id = name.toLowerCase().replace(/[^a-z0-9]/g,'-')+'_'+subId;
  if (DB.subsubcats.find(x => x.id === id)) { toast('⚠️ Yeh sub-sub-category pehle se exist karti hai!','e'); return; }
  DB.subsubcats.push({id, parent: subId, mainParent: mainId, name, mcqs});
  renderCatTable();
  document.getElementById('newSSCName').value = '';
  document.getElementById('newSSCCount').value = '';
  logAct('🏷️','Sub-Sub-Category added — '+name+' under '+subObj?.name+' > '+mainObj?.name,'st-sch','Sub-Sub');
  toast('✅ "'+name+'" added under '+subObj?.name+'!','s');
  saveDB();
}

function renderCatTable() {
  const tbody = document.getElementById('catTableBody'); if(!tbody) return;
  const mainRows = DB.cats.map((c,i) => ({...c, _type:'main', _parent:'—', _idx:i+1}));
  const subRows = DB.subcats.map((s,i) => {
    const p = DB.cats.find(c => c.id===s.parent);
    return {...s, _type:'sub', icon:'📌', show:false, color:'', _parent:p?.name||s.parent, _idx:mainRows.length+i+1};
  });
  const sscRows = DB.subsubcats.map((x,i) => {
    const sub = DB.subcats.find(s => s.id===x.parent);
    const main = DB.cats.find(c => c.id===x.mainParent);
    return {...x, _type:'subsub', icon:'🔹', show:false, color:'', _parent:(sub?.name||x.parent)+' › '+(main?.name||x.mainParent), _idx:mainRows.length+subRows.length+i+1};
  });
  const all = [...mainRows, ...subRows, ...sscRows];
  tbody.innerHTML = all.map(c =>
    `<tr>
      <td style="color:var(--ad);">${c._idx}</td>
      <td style="font-size:20px;">${c.icon||'📌'}</td>
      <td class="td-main">${c.name}</td>
      <td><span class="${c._type==='main'?'diff-e':c._type==='sub'?'diff-m':'chip-a'}">${c._type==='main'?'Main':c._type==='sub'?'Sub':'Sub-Sub'}</span></td>
      <td style="color:var(--ad);font-size:12px;">${c._parent||'—'}</td>
      <td><span class="st ${c.show?'st-pub':'st-dft'}">${c.show?'Yes':'No'}</span></td>
      <td style="color:var(--ad);">${(c.mcqs||0).toLocaleString()}</td>
      <td><div style="display:flex;gap:5px;">
        <button class="ab ab-o" style="padding:3px 8px;font-size:11px;" onclick="editCat('${c.id}','${c._type}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:3px 8px;font-size:11px;" onclick="delCat('${c.id}','${c._type}',this)">Del</button>
      </div></td>
    </tr>`).join('');
  const cc = document.getElementById('catCount'); if(cc) cc.textContent = all.length;
}

function delCat(id, type, btn) {
  if (!confirm('Delete this category?')) return;
  if (type==='main') DB.cats = DB.cats.filter(c => c.id!==id);
  else if (type==='sub') DB.subcats = DB.subcats.filter(s => s.id!==id);
  else if (type==='subsub') DB.subsubcats = DB.subsubcats.filter(x => x.id!==id);
  btn.closest('tr').remove();
  renderHomeCats(); refreshNavCats(); refreshFooterCats(); refreshAllCatSelects(); refreshPTDropdowns();
  refreshSSCMainDropdown();
  updateDashStats();
  logAct('🗑️','Category deleted','st-del','Deleted');
  saveDB();
  toast('🗑️ Category deleted!','e');
}

function editCat(id, type) {
  let item = null;
  if (type==='main') item = DB.cats.find(c => c.id===id);
  else if (type==='sub') item = DB.subcats.find(s => s.id===id);
  else if (type==='subsub') item = DB.subsubcats.find(x => x.id===id);
  if (!item) { toast('Item nahi mila!','e'); return; }

  const S = 'width:100%;padding:10px 13px;background:#f0f6f2;border:1.5px solid #c4d9cc;border-radius:9px;font-family:DM Sans,sans-serif;font-size:14px;color:#0d1f18;outline:none;box-sizing:border-box;';
  const L = 'display:block;font-size:12px;font-weight:700;color:#2D5C45;margin:14px 0 5px;';

  const wrap = document.getElementById('editWrap');
  if (!wrap) return;

  document.getElementById('ewTitle').textContent = '✏️ Category Edit — ' + item.name;
  ewCtx = {type:'cat', id, catType:type};

  let html = `<label style="${L}">Category Name *</label>
    <input id="ewCatName" style="${S}" value="${item.name}">`;

  if (type==='main') {
    const icons = ['📚','📖','🎯','💡','🏆','📋','🔍','✏️','📊','🌟','💼','🔬','🌍','💻','⚡','🎓','📜','🧪','🧬','🌏','📗','🔢','⚗️','🧬','☪️','📰'];
    html += `<label style="${L}">Icon (Emoji)</label>
      <input id="ewCatIcon" style="${S}" value="${item.icon||'📚'}" placeholder="e.g. 📚">
      <label style="${L}">Background Color</label>
      <input id="ewCatColor" type="color" style="height:40px;padding:4px 6px;border:1.5px solid #c4d9cc;border-radius:9px;cursor:pointer;width:100%;" value="${item.color||'#e8f5ee'}">
      <label style="${L}">Homepage par dikhayein?</label>
      <select id="ewCatShow" style="${S}">
        <option value="yes" ${item.show?'selected':''}>✅ Yes — Homepage par show ho</option>
        <option value="no" ${!item.show?'selected':''}>🔒 No — Hidden raho</option>
      </select>`;
  }

  document.getElementById('ewBody').innerHTML = html;
  wrap.style.display = 'flex';
}

function updateDashStats() {
  const realCount = DB.mcqs.length;
  const sm = document.getElementById('stMcq'); if(sm) sm.textContent=realCount.toLocaleString();
  const sa = document.getElementById('stArt'); if(sa) sa.textContent=DB.articles.length;
  const su = document.getElementById('stUsers'); if(su) su.textContent=DB.users.length;
  const sc = document.getElementById('stCats'); if(sc) sc.textContent=DB.cats.length;
  const hm = document.getElementById('heroMcqCount'); if(hm) hm.textContent=realCount.toLocaleString()+(realCount>0?'+':'');
  const sbm = document.getElementById('sbMcqBadge'); if(sbm) sbm.textContent=realCount>999?Math.round(realCount/1000)+'K':realCount;
  // ✅ Real Active Learners — registered users ki real count
  const hu = document.getElementById('heroUserCount');
  if (hu) {
    const uc = DB.users.length;
    if (uc >= 1000000) hu.textContent = (uc/1000000).toFixed(1)+'M+';
    else if (uc >= 1000) hu.textContent = (uc/1000).toFixed(1)+'K+';
    else if (uc > 0) hu.textContent = uc+'+';
    else hu.textContent = '0';
  }
  renderContentBars();
}

function renderContentBars() {
  const el = document.getElementById('contentBars'); if(!el) return;
  const items=[
    {l:'MCQs',c:DB.mcqs.length,max:Math.max(DB.mcqs.length,100),col:'var(--aa)'},
    {l:'Articles',c:DB.articles.length,max:50,col:'#4a9ef5'},
    {l:'PDFs',c:DB.pdfs.length,max:50,col:'var(--ag)'},
    {l:'Videos',c:DB.videos.length,max:50,col:'#FF6B5B'},
    {l:'Notes',c:DB.notes.length,max:50,col:'#b07800'}
  ];
  el.innerHTML = items.map(item => {
    const pct = Math.min(Math.round(item.c/item.max*100),100)||0;
    return `<div style="display:flex;align-items:center;gap:10px;margin-bottom:8px;">
      <span style="font-size:12px;color:var(--ad);width:55px;">${item.l}</span>
      <div style="flex:1;height:6px;background:var(--abr);border-radius:4px;overflow:hidden;"><div style="height:100%;width:${pct}%;background:${item.col};border-radius:4px;transition:width .5s;"></div></div>
      <span style="font-size:11px;color:${item.col};font-weight:700;width:20px;text-align:right;">${item.c}</span>
    </div>`;
  }).join('');
}

/* ══════ ACTIVITY FEED ══════ */
function logAct(icon, text, badgeClass, badgeText) {
  actLog.unshift({icon, text, badgeClass, badgeText, ts:Date.now()});
  if (actLog.length > 50) actLog.pop();
  renderActFeed();
}

function timeAgo(ts) {
  const d = Math.floor((Date.now()-ts)/1000);
  if (d<5) return 'Just now';
  if (d<60) return d+'s ago';
  if (d<3600) { const m=Math.floor(d/60); return m+'min'+(m>1?'s':'')+' ago'; }
  if (d<86400) { const h=Math.floor(d/3600); return h+'hr'+(h>1?'s':'')+' ago'; }
  return Math.floor(d/86400)+'d ago';
}

function renderActFeed() {
  const feed = document.getElementById('actFeed'); if(!feed) return;
  const empty = document.getElementById('actEmpty');
  if (empty) empty.style.display = actLog.length ? 'none' : 'block';
  const cnt = document.getElementById('actCount'); if(cnt) cnt.textContent = actLog.length;
  feed.querySelectorAll('.act-item').forEach(e => e.remove());
  const dotBgs={'st-pub':'rgba(34,201,123,.15)','st-sch':'rgba(245,200,66,.15)','st-dft':'rgba(255,255,255,.08)','st-user':'rgba(74,158,245,.15)','st-del':'rgba(255,107,91,.15)'};
  actLog.forEach(a => {
    feed.insertAdjacentHTML('beforeend',
      `<div class="act-item">
        <div class="act-dot" style="background:${dotBgs[a.badgeClass]||'rgba(34,201,123,.15)'};">${a.icon}</div>
        <div style="flex:1;"><div class="act-title">${a.text}</div><div class="act-time" data-ts="${a.ts}">${timeAgo(a.ts)}</div></div>
        <span class="act-badge ${a.badgeClass}">${a.badgeText}</span>
      </div>`);
  });
}

function clearAct() {
  if (!actLog.length) return;
  if (confirm('Clear all activity?')) { actLog.length=0; renderActFeed(); toast('🗑️ Activity cleared','i'); }
}

setInterval(() => {
  document.querySelectorAll('.act-time[data-ts]').forEach(el => el.textContent=timeAgo(parseInt(el.dataset.ts)));
}, 30000);

function handleArtImg(inp) {
  if (!inp.files || !inp.files[0]) return;
  document.getElementById('artImgName').textContent = '✅ '+inp.files[0].name;
  const r = new FileReader();
  r.onload = e => {
    window._artImgData = e.target.result;
    document.getElementById('artImgPreview').src = window._artImgData;
    document.getElementById('artImgPreviewWrap').style.display = 'block';
  };
  r.readAsDataURL(inp.files[0]);
}

/* expCmd moved below */
function execCmd(cmd, val) { document.getElementById('artEditor')?.focus(); document.execCommand(cmd,false,val||null); }

document.addEventListener('mouseup', () => {
  const sel = window.getSelection();
  if (sel && sel.rangeCount>0) {
    const r = sel.getRangeAt(0);
    const ed = document.getElementById('artEditor');
    if (ed && ed.contains(r.commonAncestorContainer)) savedRange = r.cloneRange();
  }
});

function openLinkMod() { document.getElementById('linkMod').classList.add('open'); }
function openImgMod() { document.getElementById('imgMod').classList.add('open'); }
function closeMod(id) { document.getElementById(id).classList.remove('open'); }

function insertLink() {
  const url = document.getElementById('lnkUrl').value.trim();
  const text = document.getElementById('lnkText').value.trim();
  const type = document.getElementById('lnkType').value;
  const target = document.getElementById('lnkTarget').value;
  if (!url) { toast('Enter URL!','e'); return; }
  const rel = type ? ` rel="${type}${target==='_blank'?' noreferrer':''}"` : (target==='_blank'?' rel="noreferrer"':'');
  const tgt = target==='_blank' ? ' target="_blank"' : '';
  document.getElementById('artEditor').focus();
  if (savedRange) { const s=window.getSelection(); s.removeAllRanges(); s.addRange(savedRange); }
  document.execCommand('insertHTML',false,`<a href="${url}"${rel}${tgt}>${text||url}</a>`);
  closeMod('linkMod');
  toast('✅ Link inserted ('+( type||'dofollow')+')','s');
}

function switchImgTab(n) {
  document.getElementById('imgUpDiv').style.display = n===1?'block':'none';
  document.getElementById('imgUrlDiv').style.display = n===2?'block':'none';
  document.getElementById('imgTab1').className = 'img-tab'+(n===1?' active':'');
  document.getElementById('imgTab2').className = 'img-tab'+(n===2?' active':'');
}

function handleImgUpload(inp) {
  if (!inp.files||!inp.files[0]) return;
  document.getElementById('imgUpName').textContent = '✅ '+inp.files[0].name;
  const r = new FileReader();
  r.onload = e => {
    imgDataUrl = e.target.result;
    document.getElementById('imgUpPrevEl').src = imgDataUrl;
    document.getElementById('imgUpPrev').style.display = 'block';
  };
  r.readAsDataURL(inp.files[0]);
}

function prevImgUrl() {
  const url = document.getElementById('imgUrlInp').value;
  const pv = document.getElementById('imgUrlPrev');
  if (url) { document.getElementById('imgUrlPrevEl').src=url; pv.style.display='block'; }
  else pv.style.display='none';
}

function insertImg() {
  const tab1 = document.getElementById('imgTab1').classList.contains('active');
  const src = tab1 ? imgDataUrl : document.getElementById('imgUrlInp').value.trim();
  if (!src) { toast('Select or enter an image!','e'); return; }
  const alt = document.getElementById('imgAlt').value||'Image';
  const width = document.getElementById('imgWidth').value||'100%';
  const align = document.getElementById('imgAlign').value;
  document.getElementById('artEditor').focus();
  if (savedRange) { const s=window.getSelection(); s.removeAllRanges(); s.addRange(savedRange); }
  document.execCommand('insertHTML',false,`<img src="${src}" alt="${alt}" width="${width}" ${align}><br>`);
  closeMod('imgMod');
  toast('✅ Image inserted!','s');
}

/* ══════ NOTE TABS ══════ */
function noteTab(n) {
  document.getElementById('noteWriteDiv').style.display = n===1?'block':'none';
  document.getElementById('noteUpDiv').style.display = n===2?'block':'none';
  document.getElementById('nt1').className = 'note-tab'+(n===1?' active':'');
  document.getElementById('nt2').className = 'note-tab'+(n===2?' active':'');
}

function showFile(inp, displayId) {
  if (inp.files&&inp.files[0]) { const d=document.getElementById(displayId); if(d) d.textContent='✅ '+inp.files[0].name; }
}

/* ══════ AUTH ══════ */
function openAuth(t) {
  document.getElementById('authOverlay').classList.add('open');
  document.getElementById('authSuccess').style.display='none';
  document.getElementById('authForm').style.display='block';
  switchTab(t||'login');
}
function closeAuth() { document.getElementById('authOverlay').classList.remove('open'); }
function requireLogin() { openAuth('login'); }

function switchTab(t) {
  const il = t==='login';
  document.getElementById('tabL').classList.toggle('active',il);
  document.getElementById('tabR').classList.toggle('active',!il);
  document.getElementById('loginForm').style.display = il?'block':'none';
  document.getElementById('registerForm').style.display = il?'none':'block';
  document.getElementById('authTitle').textContent = il?'Welcome Back!':'Create Account';
  document.getElementById('authSub').textContent = il?'Login to continue learning':'Join 1.2M+ students today!';
  document.getElementById('authSwitch').innerHTML = il ?
    `Don't have an account? <a onclick="switchTab('register')">Register Free →</a>` :
    `Already have an account? <a onclick="switchTab('login')">Login →</a>`;
}

function isEmail(e) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e); }
function clrErr(id) {
  const e=document.getElementById(id+'Err'); if(e) e.classList.remove('show');
  const i=document.getElementById(id); if(i) i.classList.remove('err');
}
function showErr(id, msg) {
  const e=document.getElementById(id); if(e){e.textContent=msg;e.classList.add('show');}
  const i=document.getElementById(id.replace('Err','')); if(i) i.classList.add('err');
}
function togPwd(id, el) {
  const i=document.getElementById(id); if(!i) return;
  i.type=i.type==='password'?'text':'password';
  el.textContent=i.type==='password'?'👁':'🙈';
}
function pwdStr() {
  const p=document.getElementById('regPass')?.value||'';
  const bw=document.getElementById('pwdBarW'); const f=document.getElementById('pwdFill'); const t=document.getElementById('pwdTxt');
  if(!p){if(bw)bw.style.display='none';return;}
  if(bw)bw.style.display='block';
  let sc=0; if(p.length>=8)sc++; if(p.length>=12)sc++; if(/[A-Z]/.test(p))sc++; if(/[0-9]/.test(p))sc++; if(/[^A-Za-z0-9]/.test(p))sc++;
  const lv=[{w:'20%',c:'#ff4444',l:'Weak'},{w:'40%',c:'#ff8c00',l:'Fair'},{w:'60%',c:'#ffbb00',l:'Good'},{w:'80%',c:'#88c057',l:'Strong'},{w:'100%',c:'var(--em)',l:'Very Strong'}];
  const x=lv[Math.min(sc,4)];
  if(f){f.style.width=x.w;f.style.background=x.c;}
  if(t){t.textContent=x.l+' password';t.style.color=x.c;}
}

function socialLogin(pv) {
  document.getElementById('authForm').innerHTML = `<div style="text-align:center;padding:28px 0;"><div style="font-size:40px;margin-bottom:12px;">${pv==='Google'?'🔵':'🔷'}</div><div style="font-size:14px;font-weight:700;color:var(--text);margin-bottom:5px;">Connecting to ${pv}…</div><div style="margin:14px auto;width:36px;height:36px;border:3px solid var(--border);border-top-color:var(--em);border-radius:50%;animation:spin .7s linear infinite;"></div></div>`;
  setTimeout(() => loginSuccess(pv+' User', pv.toLowerCase()+'@demo.com', pv), 2000);
}

async function doLogin() {
  const e=document.getElementById('liEmail')?.value.trim();
  const p=document.getElementById('liPass')?.value;
  let ok=true;
  if(!isEmail(e)){showErr('liEmailErr','Valid email required');ok=false;}
  if((p||'').length<6){showErr('liPassErr','Min 6 characters');ok=false;}
  if(!ok)return;
  setLoad('loginBtn','loginBtnTxt','loginSpin',true);
  try {
    const r = await fetch(API_URL + '?action=login_user', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({email: e, password: p})
    });
    const res = await r.json();
    if (res.success) {
      loginSuccess(res.name, e, res.method || 'Email');
    } else {
      setLoad('loginBtn','loginBtnTxt','loginSpin',false);
      if (res.error && res.error.includes('nahi mila')) showErr('liEmailErr', res.error);
      else showErr('liPassErr', res.error || 'Login failed');
    }
  } catch(e2) {
    setLoad('loginBtn','loginBtnTxt','loginSpin',false);
    showErr('liEmailErr','Server error. Try again.');
  }
}

async function doRegister() {
  const n=document.getElementById('regName')?.value.trim();
  const e=document.getElementById('regEmail')?.value.trim();
  const p=document.getElementById('regPass')?.value;
  const c=document.getElementById('regConf')?.value;
  const t=document.getElementById('regTerms')?.checked;
  let ok=true;
  if(!n||n.length<2){showErr('regNameErr','Enter full name');ok=false;}
  if(!isEmail(e)){showErr('regEmailErr','Valid email required');ok=false;}
  if((p||'').length<8){showErr('regPassErr','Min 8 characters');ok=false;}
  if(p!==c){showErr('regConfErr','Passwords do not match');ok=false;}
  if(!t){showErr('regTermsErr','Please accept terms');ok=false;}
  if(!ok)return;
  setLoad('regBtn','regBtnTxt','regSpin',true);
  try {
    const r = await fetch(API_URL + '?action=register_user', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({name: n, email: e, password: p, method: 'Email'})
    });
    const res = await r.json();
    if (res.success) {
      // Add to local DB (without password for frontend)
      if (!DB.users.find(u=>u.email===e)) {
        DB.users.push({name:n,email:e,password:'***',method:'Email',date:new Date().toLocaleDateString()});
      }
      updateUsersList();
      logAct('👤','New user — '+n+' (Email)','st-user','New User');
      loginSuccess(n,e,'Email');
    } else {
      setLoad('regBtn','regBtnTxt','regSpin',false);
      if (res.error && res.error.includes('already')) showErr('regEmailErr', res.error);
      else showErr('regNameErr', res.error || 'Registration failed');
    }
  } catch(e2) {
    setLoad('regBtn','regBtnTxt','regSpin',false);
    showErr('regNameErr','Server error. Try again.');
  }
}

function setLoad(b,t,s,st){
  const btn=document.getElementById(b); const txt=document.getElementById(t); const spn=document.getElementById(s);
  if(btn)btn.disabled=st;
  if(txt)txt.textContent=st?'Please wait…':(b==='loginBtn'?'Login to Vokomoon':'Create Free Account');
  if(spn)spn.style.display=st?'block':'none';
}

function loginSuccess(name,email,method){
  curUser={name,email,method};
  const ha=document.getElementById('hActions');
  const userInitial=name.charAt(0).toUpperCase();
  ha.innerHTML=`<button class="btn-admin" onclick="go('admin')"><div class="dot"></div>🛡️ <span class="btn-lbl">Admin Panel</span></button><div class="user-chip"><div class="user-av">${userInitial}</div><span style="font-size:13px;font-weight:700;color:var(--forest);">${name.split(' ')[0]}</span><button class="btn-logout" onclick="doLogout()">Logout</button></div>`;
  document.getElementById('authForm').style.display='none';
  document.getElementById('authSuccess').style.display='block';
  document.getElementById('succTitle').textContent='Welcome, '+name.split(' ')[0]+'! 🎉';
  document.getElementById('succSub').textContent='Logged in via '+method+'. Happy learning!';
  if(method!=='Email'&&!DB.users.find(u=>u.email===email)){
    DB.users.push({name,email,password:'***',method,date:new Date().toLocaleDateString()});
    logAct('👤','New user via '+method+' — '+name,'st-user','New User');
  }
  updateUsersList();
  updateDashStats();
  saveDB();
  refreshSaveBtns();
  toast('✅ Welcome, '+name.split(' ')[0]+'!','s');
  setTimeout(closeAuth,2500);
}

function doLogout(){
  curUser=null;
  document.getElementById('hActions').innerHTML=`<button class="btn-admin" onclick="go('admin')"><div class="dot"></div>🛡️ <span class="btn-lbl">Admin Panel</span></button><button class="btn-login" onclick="openAuth('login')">Login</button><button class="btn-reg" onclick="openAuth('register')">Register Free</button>`;
  refreshSaveBtns();
  toast('👋 Logged out','i');
}

/* ══════ SAVE FOR LATER ══════ */
function goSaved() {
  go('saved');
  renderSavedPage();
}

function renderSavedPage() {
  const loginMsg = document.getElementById('savedLoginMsg');
  const savedContent = document.getElementById('savedContent');
  if (!curUser) {
    if (loginMsg) loginMsg.style.display = 'block';
    if (savedContent) savedContent.style.display = 'none';
    return;
  }
  if (loginMsg) loginMsg.style.display = 'none';
  if (savedContent) savedContent.style.display = 'block';
  renderSavedList('all');
}

function renderSavedList(filter) {
  const listEl = document.getElementById('savedList');
  const emptyEl = document.getElementById('savedEmpty');
  if (!listEl) return;
  const userEmail = curUser?.email || '';
  const items = (DB.savedItems || []).filter(s => s.userEmail === userEmail);
  const filtered = filter === 'all' ? items : items.filter(s => s.type === filter);
  if (!filtered.length) {
    listEl.innerHTML = '';
    if (emptyEl) emptyEl.style.display = 'block';
    return;
  }
  if (emptyEl) emptyEl.style.display = 'none';
  const typeColors = {mcq:'rgba(34,201,123,.1)',article:'rgba(74,158,245,.1)',pdf:'rgba(74,158,245,.12)',video:'rgba(245,200,66,.12)',notes:'rgba(255,107,91,.1)'};
  const typeIcons = {mcq:'❓',article:'📰',pdf:'📄',video:'🎥',notes:'📓'};
  listEl.innerHTML = filtered.map(s => `
    <div class="mcq-card" style="margin-bottom:10px;cursor:pointer;" onclick="${s.action||''}">
      <div class="mcq-num" style="background:${typeColors[s.type]||'rgba(34,201,123,.1)'};">${typeIcons[s.type]||'📌'} ${s.type.toUpperCase()}</div>
      <div class="mcq-body">
        <div class="mcq-q">${s.title}</div>
        <div class="mcq-meta">
          <span class="tag tag-cat">${s.cat||''}</span>
          <span class="mcq-views">📅 ${s.savedDate}</span>
        </div>
      </div>
      <button onclick="event.stopPropagation();unsaveItem('${s.id}')" style="background:rgba(255,107,91,.12);border:1px solid rgba(255,107,91,.25);color:#c0302a;border-radius:8px;padding:6px 12px;font-size:12px;font-weight:700;cursor:pointer;white-space:nowrap;flex-shrink:0;">🗑️ Unsave</button>
    </div>`).join('');
}

function filterSaved(type) {
  document.querySelectorAll('[id^="sf-"]').forEach(b => {
    b.classList.toggle('active', b.id === 'sf-'+type);
  });
  renderSavedList(type);
}

function isItemSaved(itemId) {
  const userEmail = curUser?.email || '';
  return (DB.savedItems || []).some(s => s.id === itemId && s.userEmail === userEmail);
}

function saveItem(type, id, title, cat, action) {
  if (!curUser) { openAuth('login'); toast('⚠️ Save karne ke liye login karein!','e'); return; }
  const userEmail = curUser.email;
  if (!DB.savedItems) DB.savedItems = [];
  if (isItemSaved(id)) { toast('✅ Pehle se saved hai!','i'); return; }
  DB.savedItems.push({ id, type, title, cat, action, userEmail, savedDate: new Date().toLocaleDateString() });
  saveDB();
  toast('🔖 Saved! "Saved Items" mein dekh sakte hain.','s');
  refreshSaveBtns();
}

function unsaveItem(itemId) {
  const userEmail = curUser?.email || '';
  const idx = (DB.savedItems||[]).findIndex(s => s.id === itemId && s.userEmail === userEmail);
  if (idx > -1) { DB.savedItems.splice(idx,1); saveDB(); }
  toast('🗑️ Unsaved!','i');
  refreshSaveBtns();
  const filter = document.querySelector('[id^="sf-"].active')?.id?.replace('sf-','') || 'all';
  renderSavedList(filter);
}

function refreshSaveBtns() {
  document.querySelectorAll('[data-saveid]').forEach(btn => {
    const id = btn.dataset.saveid;
    const saved = isItemSaved(id);
    btn.textContent = saved ? '🔖 Saved' : '🔖 Save';
    btn.style.background = saved ? 'rgba(34,201,123,.15)' : 'rgba(255,255,255,.07)';
    btn.style.color = saved ? 'var(--em)' : '';
  });
}

function saveBtnHtml(type, id, title, cat, action) {
  const saved = curUser && isItemSaved(id);
  // Use data-attributes to avoid single-quote breaking onclick
  const safeTitle = (title||'').replace(/"/g,'&quot;').replace(/</g,'&lt;').substring(0,80);
  const safeAction = (action||'').replace(/"/g,'&quot;');
  const safeCat = (cat||'').replace(/"/g,'&quot;');
  return `<button data-saveid="${id}" data-stype="${type}" data-stitle="${safeTitle}" data-scat="${safeCat}" data-saction="${safeAction}" onclick="event.stopPropagation();handleSaveBtn(this)" style="background:${saved?'rgba(34,201,123,.15)':'rgba(255,255,255,.07)'};border:1px solid var(--border);color:${saved?'var(--em)':'var(--text3)'};border-radius:8px;padding:5px 11px;font-size:11.5px;font-weight:700;cursor:pointer;white-space:nowrap;flex-shrink:0;">${saved?'🔖 Saved':'🔖 Save'}</button>`;
}

function handleSaveBtn(btn) {
  const type   = btn.dataset.stype;
  const id     = btn.dataset.saveid;
  const title  = btn.dataset.stitle;
  const cat    = btn.dataset.scat;
  const action = btn.dataset.saction;
  saveItem(type, id, title, cat, action);
}

/* ══════ SEARCH ══════ */
function liveSearch(q) {
  const drop = document.getElementById('searchDrop');
  if (!drop) return;
  q = q.trim().toLowerCase();
  if (!q || q.length < 2) { drop.style.display = 'none'; return; }
  const results = [];
  // Search MCQs
  DB.mcqs.filter(m => m.q.toLowerCase().includes(q)).slice(0,5).forEach(m => {
    const cat = DB.cats.find(c => c.id === m.cat);
    results.push({ type:'mcq', icon:'❓', bg:'rgba(34,201,123,.1)', title: m.q.substring(0,70)+(m.q.length>70?'…':''), sub: (cat?.name||m.cat)+' · '+m.diff, action:`openMcqDetail('${m.id}',0)` });
  });
  // Search categories
  DB.cats.filter(c => c.name.toLowerCase().includes(q)).slice(0,3).forEach(c => {
    results.push({ type:'cat', icon: c.icon||'📚', bg: c.color||'rgba(34,201,123,.1)', title: c.name, sub: DB.mcqs.filter(m=>m.cat===c.id).length+' MCQs', action:`openCatPage('${c.id}')` });
  });
  // Search articles
  DB.articles.filter(a => (a.title||'').toLowerCase().includes(q)).slice(0,3).forEach(a => {
    results.push({ type:'article', icon: a.emoji||'📝', bg:'rgba(74,158,245,.1)', title: a.title, sub:'Article · '+a.date, action:`openBlogPost('${a.id}')` });
  });
  if (!results.length) {
    drop.innerHTML = '<div style="padding:18px;text-align:center;color:var(--text3);font-size:13px;">🔍 Koi nataeja nahi mila — "'+q+'"</div>';
    drop.style.display = 'block';
    return;
  }
  drop.innerHTML = '<div style="padding:10px 16px 6px;font-size:11px;font-weight:700;color:var(--text3);letter-spacing:.8px;text-transform:uppercase;">Search Results</div>'
    + results.map(r =>
      `<div class="s-result" onclick="${r.action};closeSearch()">
        <div class="s-result-icon" style="background:${r.bg};">${r.icon}</div>
        <div><div class="s-result-title">${r.title}</div><div class="s-result-sub">${r.sub}</div></div>
      </div>`
    ).join('');
  drop.style.display = 'block';
}

function closeSearch() {
  const drop = document.getElementById('searchDrop'); if(drop) drop.style.display='none';
  const inp = document.getElementById('mainSearchInp'); if(inp) inp.value='';
}

// Close search on outside click
document.addEventListener('click', function(e) {
  const drop = document.getElementById('searchDrop');
  const inp = document.getElementById('mainSearchInp');
  if (drop && inp && !drop.contains(e.target) && e.target !== inp) drop.style.display = 'none';
});

function updateUsersList(){
  const tbody=document.getElementById('usersBody'); if(!tbody)return;
  const sb=document.getElementById('sbUserBadge'); if(sb)sb.textContent=DB.users.length;
  if(!DB.users.length){tbody.innerHTML='<tr><td colspan="7" style="text-align:center;padding:24px;color:var(--ad);">No users registered yet.</td></tr>';return;}
  tbody.innerHTML=DB.users.map((u,i)=>
    `<tr><td>${i+1}</td><td class="td-main">${u.name}</td><td style="color:var(--ad);">${u.email}</td><td><span class="chip-a">${u.method}</span></td><td>${u.date}</td><td><span class="st st-pub">Active</span></td><td><button class="ab ab-d" style="padding:3px 8px;font-size:11px;">Block</button></td></tr>`).join('');
  const ut=document.getElementById('userTotal'); if(ut)ut.textContent=DB.users.length;
}

/* ══════ ASK QUESTION ══════ */
function submitAskQuestion() {
  const name = document.getElementById('askName')?.value.trim();
  const cat = document.getElementById('askCatSel')?.value;
  const wa = document.getElementById('askWhatsapp')?.value.trim();
  const question = document.getElementById('askQuestion')?.value.trim();
  const details = document.getElementById('askDetails')?.value.trim();

  // Clear previous errors
  ['askNameErr','askWaErr','askQErr'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.style.display = 'none';
  });

  let valid = true;

  if (!name) {
    document.getElementById('askNameErr').style.display = 'block';
    valid = false;
  }
  // WhatsApp validation — MANDATORY, must be 10-11 digits
  const waClean = wa.replace(/\s|-/g,'');
  if (!waClean || !/^0?3[0-9]{9}$/.test(waClean)) {
    document.getElementById('askWaErr').style.display = 'block';
    document.getElementById('askWhatsapp').style.borderColor = 'var(--coral)';
    valid = false;
  } else {
    document.getElementById('askWhatsapp').style.borderColor = '#25D366';
  }
  if (!question) {
    document.getElementById('askQErr').style.display = 'block';
    valid = false;
  }
  if (!valid) { toast('⚠️ Tamam zaruri fields bharein!','e'); return; }

  const waFormatted = waClean.startsWith('0') ? '+92'+waClean.substring(1) : '+92'+waClean;
  const q = {
    id: 'q_'+Date.now(),
    name: name,
    cat: cat || 'General',
    whatsapp: waFormatted,
    question,
    details,
    date: new Date().toLocaleDateString(),
    status: 'Pending'
  };
  DB.questions.push(q);

  // Show confirmation on ask page
  const listEl = document.getElementById('askPostedList');
  if (listEl) {
    listEl.insertAdjacentHTML('afterbegin',
      `<div style="background:var(--white);border:2px solid var(--em);border-radius:16px;padding:20px 24px;margin-bottom:12px;box-shadow:var(--sh2);">
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
          <span style="font-size:28px;">✅</span>
          <div>
            <div style="font-size:15px;font-weight:800;color:var(--forest);">Aapka sawal post ho gaya!</div>
            <div style="font-size:12.5px;color:var(--text3);">Hum aapko WhatsApp par jawab bhejenge</div>
          </div>
        </div>
        <div style="background:var(--bg);border-radius:10px;padding:12px 14px;border:1px solid var(--border);">
          <div style="font-size:14px;color:var(--text);font-weight:600;margin-bottom:6px;">${question}</div>
          <div style="font-size:12px;color:var(--text3);">📂 ${q.cat} · 👤 ${q.name} · 📲 ${waFormatted} · 📅 ${q.date}</div>
        </div>
        <div style="margin-top:12px;background:linear-gradient(135deg,#e8faf2,#d4f4e4);border-radius:10px;padding:11px 14px;display:flex;align-items:center;gap:9px;">
          <span style="font-size:18px;">📲</span>
          <span style="font-size:12.5px;color:var(--forest);font-weight:600;">Admin aapke WhatsApp <b>${waFormatted}</b> par jawab bhejega. Ready rahein!</span>
        </div>
      </div>`);
  }

  // Clear all fields
  document.getElementById('askName').value='';
  document.getElementById('askWhatsapp').value='';
  document.getElementById('askQuestion').value='';
  document.getElementById('askDetails').value='';
  document.getElementById('askCatSel').value='';

  // Refresh admin Questions tab
  renderQuestionsAdmin();
  const badge = document.getElementById('sbQBadge');
  if (badge) badge.textContent = DB.questions.length;
  logAct('❓','New question — '+question.substring(0,40)+' ['+waFormatted+']','st-user','Question');
  saveDB();
  toast('✅ Sawal post ho gaya! Admin WhatsApp par reply karega.','s');
}

function renderQuestionsAdmin() {
  const el = document.getElementById('questionsListAdmin');
  if (!el) return;
  if (!DB.questions.length) {
    el.innerHTML = '<div class="pub-empty">No questions posted yet. 💬</div>';
    return;
  }
  el.innerHTML = DB.questions.map((q,i) => {
    const waLink = q.whatsapp ? q.whatsapp.replace(/\+/g,'') : '';
    const waMsg = encodeURIComponent('Assalam o Alaikum! Aapka sawal: "'+q.question+'" — Vokomoon Team');
    return `<div class="pub-card" style="margin-bottom:12px;align-items:flex-start;flex-wrap:wrap;gap:10px;">
      <div class="pub-icon" style="background:rgba(37,211,102,.15);font-size:20px;flex-shrink:0;">❓</div>
      <div class="pub-body" style="min-width:200px;">
        <div class="pub-title" style="font-size:14px;">${q.question}</div>
        <div class="pub-meta" style="margin-top:4px;">
          👤 <b>${q.name}</b> · 📂 ${q.cat} · 📅 ${q.date}
          ${q.whatsapp ? `<br><span style="color:#25D366;font-weight:700;">📲 ${q.whatsapp}</span>` : ''}
          ${q.details ? '<br><span style="color:var(--ad);font-style:italic;">'+q.details+'</span>' : ''}
        </div>
      </div>
      <div style="display:flex;flex-direction:column;gap:6px;flex-shrink:0;">
        ${q.whatsapp ? `<a href="https://wa.me/${waLink}?text=${waMsg}" target="_blank" class="ab ab-p" style="padding:6px 12px;font-size:12px;text-decoration:none;display:flex;align-items:center;gap:5px;background:linear-gradient(135deg,#25D366,#128C7E);">📲 WhatsApp Reply</a>` : ''}
        <button class="ab ${q.status==='Answered'?'ab-p':'ab-o'}" style="padding:5px 10px;font-size:11px;" onclick="DB.questions[${i}].status='Answered';renderQuestionsAdmin();saveDB();toast('✅ Marked answered!','s')">${q.status==='Answered'?'✅ Answered':'Mark Answered'}</button>
        <button class="ab ab-d" style="padding:5px 10px;font-size:11px;" onclick="if(confirm('Delete?')){DB.questions.splice(${i},1);renderQuestionsAdmin();document.getElementById('sbQBadge').textContent=DB.questions.length;saveDB();toast('🗑️ Deleted!','e')}">Del</button>
      </div>
    </div>`;
  }).join('');
  const badge = document.getElementById('sbQBadge');
  if (badge) badge.textContent = DB.questions.length;
}

/* expCmd — rich editor for MCQ explanation AND question text */
function expCmd(n, cmd, val) {
  // n can be a number (for explanation) or 'q1','q2'... (for question)
  const elId = (typeof n === 'string' && n.startsWith('q')) ? 'mcqQ' + n.slice(1) : 'mcqExp' + n;
  const el = document.getElementById(elId);
  if (!el) return;
  el.focus();
  document.execCommand(cmd, false, val||null);
}

// Insert a table at cursor position
function insertTableInExp(n) {
  let rows = prompt('Number of rows (1-10):', '3');
  if (!rows) return;
  rows = parseInt(rows);
  if (isNaN(rows) || rows < 1) rows = 1;
  if (rows > 10) rows = 10;

  let cols = prompt('Number of columns (1-10):', '3');
  if (!cols) return;
  cols = parseInt(cols);
  if (isNaN(cols) || cols < 1) cols = 1;
  if (cols > 10) cols = 10;

  let tableHtml = '<table border="1" cellpadding="5" cellspacing="0" style="border-collapse:collapse; margin:10px 0; width:100%;">';
  for (let i = 0; i < rows; i++) {
    tableHtml += '<tr>';
    for (let j = 0; j < cols; j++) {
      tableHtml += '<td style="border:1px solid #ccc; padding:8px;">&nbsp;</td>';
    }
    tableHtml += '</tr>';
  }
  tableHtml += '</table>';

  const editor = document.getElementById('mcqExp' + n);
  if (!editor) return;
  editor.focus();

  // Use execCommand with insertHTML (supported in modern browsers)
  if (document.queryCommandSupported('insertHTML')) {
    document.execCommand('insertHTML', false, tableHtml);
  } else {
    // Fallback: insert at cursor using selection range
    const sel = window.getSelection();
    if (sel.rangeCount) {
      const range = sel.getRangeAt(0);
      range.deleteContents();
      const fragment = range.createContextualFragment(tableHtml);
      range.insertNode(fragment);
      range.collapse(false);
      sel.removeAllRanges();
      sel.addRange(range);
    } else {
      editor.innerHTML += tableHtml;
    }
  }
}

// Apply text color to selected text (or at cursor)
function applyTextColorToExp(n) {
  let color = prompt('Enter color (name or hex):', '#22C97B');
  if (!color) return;
  const editor = document.getElementById('mcqExp' + n);
  if (!editor) return;
  editor.focus();
  document.execCommand('foreColor', false, color);
}

/* ══════ ARTICLE IMAGE HANDLER ══════ */
window._artImgData = null;
function handleArtImg(inp) {
  if (!inp.files || !inp.files[0]) return;
  document.getElementById('artImgName').textContent = '✅ ' + inp.files[0].name;
  const r = new FileReader();
  r.onload = e => {
    window._artImgData = e.target.result;
    const prev = document.getElementById('artImgPreview');
    if (prev) prev.src = e.target.result;
    const wrap = document.getElementById('artImgPreviewWrap');
    if (wrap) wrap.style.display = 'block';
  };
  r.readAsDataURL(inp.files[0]);
}

/* ══════ PUBLISH SET ══════ */
function publishSet() {
  const pt = getSPT();
  if (!pt) { toast('⚠️ Publish target select karein (Category)!','e'); return; }
  const name = document.getElementById('spSetName')?.value.trim();
  const num = parseInt(document.getElementById('spSetNum')?.value)||1;
  const desc = document.getElementById('spSetDesc')?.value.trim() || '';
  if (!name) { toast('⚠️ Set name likhein!','e'); document.getElementById('spSetName')?.focus(); return; }
  if (!DB.sets) DB.sets = [];
  const id = 'set_'+Date.now();
  const setObj = { id, name, num, catId: pt.catId, catName: pt.catName, desc, date: new Date().toLocaleDateString() };
  DB.sets.push(setObj);
  // Update count
  const cntEl = document.getElementById('setCount');
  if (cntEl) cntEl.textContent = DB.sets.length;
  // Show in list
  const listEl = document.getElementById('setList');
  const empty = listEl?.querySelector('.pub-empty'); if (empty) empty.remove();
  listEl?.insertAdjacentHTML('afterbegin',
    `<div class="pub-card">
      <div class="pub-icon" style="background:rgba(34,201,123,.12);font-size:20px;">📦</div>
      <div class="pub-body">
        <div class="pub-title">${name}</div>
        <div class="pub-meta">📂 ${pt.catName} · Set #${num} · 📅 ${setObj.date} <span class="st st-pub" style="margin-left:6px;">Live</span></div>
        ${desc ? '<div style="font-size:12px;color:var(--ad);margin-top:3px;">'+desc+'</div>' : ''}
      </div>
      <div class="pub-actions">
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="this.closest('.pub-card').remove();DB.sets=DB.sets.filter(x=>x.id!=='${id}');saveDB();toast('🗑️ Deleted!','e')">Del</button>
      </div>
    </div>`);
  logAct('📦','Set published — '+name+' ['+pt.catName+']','st-pub','Published');
  document.getElementById('spSetName').value = '';
  document.getElementById('spSetNum').value = '1';
  document.getElementById('spSetDesc').value = '';
  toast('✅ Set "'+name+'" published — '+pt.catName+'!','s');
  saveDB();
}

/* ══════ UPDATE INIT & refreshAllCatSelects ══════ */

let toastTm;
function toast(msg, type='s') {
  const t=document.getElementById('toast');
  clearTimeout(toastTm);
  t.textContent=msg; t.className='toast '+type+' show';
  toastTm=setTimeout(()=>t.className='toast',3800);
}

document.addEventListener('keydown', e=>{
  if(e.key==='Escape'){closeAuth();closeMod('linkMod');closeMod('imgMod');}
});


/* ══════════════════════════════════════════════
   OPEN CONTENT - PDF / Video / Notes detail view
   ══════════════════════════════════════════════ */
function openContent(type, id) {
  const db = {pdf:DB.pdfs, video:DB.videos, notes:DB.notes};
  const item = db[type] && db[type].find(x => x.id === id);
  if (!item) { toast('Content nahi mila!','e'); return; }

  const labels = {pdf:'📄 PDF Document', video:'🎥 Video Class', notes:'📓 Study Notes'};
  document.getElementById('ctntBread').innerHTML =
    `<span onclick="go('home')" style="color:var(--em);cursor:pointer;">Home</span> › ${item.cat} › ${item.title.substring(0,40)}`;
  document.getElementById('ctntType').textContent = labels[type] || type;
  document.getElementById('ctntTitle').textContent = item.title;
  document.getElementById('ctntMeta').textContent = '📂 ' + item.cat + '   ·   📅 ' + item.date;
  document.getElementById('ctntBack').onclick = () => { history.length > 1 ? history.back() : go('home'); };

  let body = '';
  if (type === 'pdf') {
    const pdfBtn = item.url
      ? `<a href="${item.url}" target="_blank" rel="noopener" class="btn btn-p" style="font-size:15px;padding:12px 32px;text-decoration:none;display:inline-flex;align-items:center;gap:8px;">⬇️ PDF Download / Open</a>`
      : `<div style="font-size:13px;color:var(--text3);padding:14px;background:var(--bg2);border-radius:10px;">PDF URL admin panel se add karein.</div>`;
    body = `<div style="text-align:center;padding:24px 0;">
      <div style="font-size:64px;margin-bottom:14px;">📄</div>
      <div style="font-size:18px;font-weight:700;color:var(--forest);margin-bottom:6px;">${item.title}</div>
      <div style="font-size:14px;color:var(--text3);margin-bottom:6px;">📂 ${item.cat} · 📅 ${item.date}</div>
      ${item.desc ? '<div style="font-size:14px;color:var(--text2);max-width:480px;margin:12px auto 20px;line-height:1.7;">'+item.desc+'</div>' : '<div style="height:16px;"></div>'}
      ${pdfBtn}
    </div>`;
  } else if (type === 'video') {
    const vidBtn = item.url
      ? `<a href="${item.url}" target="_blank" rel="noopener" class="btn btn-p" style="font-size:15px;padding:12px 32px;text-decoration:none;display:inline-flex;align-items:center;gap:8px;">▶️ Video Dekhen</a>`
      : `<div style="font-size:13px;color:var(--text3);padding:14px;background:var(--bg2);border-radius:10px;">Video URL admin panel se add karein.</div>`;
    body = `<div style="text-align:center;padding:24px 0;">
      <div style="font-size:64px;margin-bottom:14px;">🎥</div>
      <div style="font-size:18px;font-weight:700;color:var(--forest);margin-bottom:6px;">${item.title}</div>
      <div style="font-size:14px;color:var(--text3);margin-bottom:6px;">📂 ${item.cat} · 📅 ${item.date}</div>
      ${item.desc ? '<div style="font-size:14px;color:var(--text2);max-width:480px;margin:12px auto 20px;line-height:1.7;">'+item.desc+'</div>' : '<div style="height:16px;"></div>'}
      ${vidBtn}
    </div>`;
  } else if (type === 'notes') {
    const rawContent = (item.content || '').trim();
    const noteContent = rawContent
      ? '<div style="font-size:15px;line-height:1.9;color:var(--text2);white-space:pre-wrap;border:1.5px solid var(--border);border-radius:12px;padding:20px;background:var(--bg);">'+rawContent+'</div>'
      : '<div style="text-align:center;padding:28px;color:var(--text3);">Is notes ka koi content publish nahi kiya gaya.</div>';
    body = `<div>
      <div style="display:flex;align-items:center;gap:14px;padding:18px;background:var(--bg2);border-radius:12px;margin-bottom:18px;">
        <div style="font-size:38px;">📓</div>
        <div><div style="font-size:16px;font-weight:700;color:var(--forest);">${item.title}</div><div style="font-size:13px;color:var(--text3);margin-top:3px;">📂 ${item.cat} · 📅 ${item.date}</div></div>
      </div>
      ${noteContent}
    </div>`;
  }
  document.getElementById('ctntBody').innerHTML = body;
  go('content');
}

/* ══════════════════════════════════════════════
   HOMEPAGE RENDERS - PDF / Video / Notes
   ══════════════════════════════════════════════ */
function renderHomePdfs() {
  const sec = document.getElementById('homePdfSec');
  const el = document.getElementById('homePdfList');
  if (!sec || !el) return;
  if (!DB.pdfs.length) { sec.style.display='none'; return; }
  sec.style.display = 'block';
  el.innerHTML = [...DB.pdfs].reverse().slice(0,5).map(p =>
    `<div class="mcq-card" onclick="openContent('pdf','${p.id}')" style="cursor:pointer;">
      <div class="mcq-num" style="background:rgba(74,158,245,.12);color:#4a9ef5;">📄 PDF</div>
      <div class="mcq-body"><div class="mcq-q">${p.title}</div><div class="mcq-meta"><span class="tag tag-cat">${p.cat}</span><span class="mcq-views">📅 ${p.date}</span></div></div>
      ${saveBtnHtml('pdf',p.id,p.title,p.cat,"openContent('pdf','"+p.id+"')")}
    </div>`).join('');
}

function renderHomeVideos() {
  const sec = document.getElementById('homeVidSec');
  const el = document.getElementById('homeVidList');
  if (!sec || !el) return;
  if (!DB.videos.length) { sec.style.display='none'; return; }
  sec.style.display = 'block';
  el.innerHTML = [...DB.videos].reverse().slice(0,5).map(v =>
    `<div class="mcq-card" onclick="openContent('video','${v.id}')" style="cursor:pointer;">
      <div class="mcq-num" style="background:rgba(245,200,66,.15);color:#b07800;">🎥 Video</div>
      <div class="mcq-body"><div class="mcq-q">${v.title}</div><div class="mcq-meta"><span class="tag tag-cat">${v.cat}</span><span class="mcq-views">📅 ${v.date}</span></div></div>
      ${saveBtnHtml('video',v.id,v.title,v.cat,"openContent('video','"+v.id+"')")}
    </div>`).join('');
}

function renderHomeNotes() {
  const sec = document.getElementById('homeNotesSec');
  const el = document.getElementById('homeNotesList');
  if (!sec || !el) return;
  if (!DB.notes.length) { sec.style.display='none'; return; }
  sec.style.display = 'block';
  el.innerHTML = [...DB.notes].reverse().slice(0,5).map(n =>
    `<div class="mcq-card" onclick="openContent('notes','${n.id}')" style="cursor:pointer;">
      <div class="mcq-num" style="background:rgba(255,107,91,.12);color:#c0302a;">📓 Notes</div>
      <div class="mcq-body"><div class="mcq-q">${n.title}</div><div class="mcq-meta"><span class="tag tag-cat">${n.cat}</span><span class="mcq-views">📅 ${n.date}</span></div></div>
      ${saveBtnHtml('notes',n.id,n.title,n.cat,"openContent('notes','"+n.id+"')")}
    </div>`).join('');
}

/* ══════════════════════════════════════════════
   EDIT MODAL - works for all types
   ══════════════════════════════════════════════ */
let ewCtx = null;

function openEditModal(type, id) {
  ewCtx = null;
  const wrap = document.getElementById('editWrap');
  if (!wrap) return;
  const dbs = {article:DB.articles, mcq:DB.mcqs, pdf:DB.pdfs, video:DB.videos, notes:DB.notes};
  const arr = dbs[type]; if (!arr) return;
  const idx = arr.findIndex(x => x.id === id);
  if (idx < 0) { toast('Item nahi mila!','e'); return; }
  const item = arr[idx];
  ewCtx = {type, idx};

  const S = 'width:100%;padding:10px 13px;background:#f0f6f2;border:1.5px solid #c4d9cc;border-radius:9px;font-family:DM Sans,sans-serif;font-size:14px;color:#0d1f18;outline:none;box-sizing:border-box;';
  const L = 'display:block;font-size:12px;font-weight:700;color:#2D5C45;margin:14px 0 5px;';
  const catO = DB.cats.map(c=>`<option value="${c.name}" ${c.name===(item.cat||item.catName)?'selected':''}>${c.icon} ${c.name}</option>`).join('');
  const titles = {article:'✏️ Article Edit', mcq:'✏️ MCQ Edit', pdf:'✏️ PDF Edit', video:'✏️ Video Edit', notes:'✏️ Notes Edit'};
  document.getElementById('ewTitle').textContent = titles[type]||'✏️ Edit';

  let html = '';
  if (type === 'article') {
    html = `<label style="${L}">Title *</label><input id="ew1" style="${S}font-size:15px;font-weight:700;" value="${eh(item.title)}">
<label style="${L}">Category</label><select id="ew2" style="${S}cursor:pointer;"><option value="">Select…</option>${catO}</select>
<label style="${L}">Author</label><input id="ew3" style="${S}" value="${eh(item.author||'')}">
<label style="${L}">Excerpt</label><textarea id="ew4" style="${S}resize:vertical;min-height:60px;">${eh(item.excerpt||'')}</textarea>
<label style="${L}">Content *</label>
<div style="display:flex;flex-wrap:wrap;gap:4px;padding:8px;background:#e8f5ee;border:1.5px solid #c4d9cc;border-radius:9px 9px 0 0;border-bottom:none;">
  <button type="button" onclick="ewCmd('bold')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;font-weight:900;">B</button>
  <button type="button" onclick="ewCmd('italic')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;font-style:italic;">I</button>
  <button type="button" onclick="ewCmd('underline')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;text-decoration:underline;">U</button>
  <button type="button" onclick="document.getElementById('ewContent').focus();document.execCommand('formatBlock',false,'<h2>')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;font-weight:800;">H2</button>
  <button type="button" onclick="document.getElementById('ewContent').focus();document.execCommand('formatBlock',false,'<p>')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;">Para</button>
  <button type="button" onclick="ewCmd('insertUnorderedList')" style="padding:5px 9px;border:1px solid #c4d9cc;background:white;border-radius:6px;cursor:pointer;">• List</button>
</div>
<div id="ewContent" contenteditable="true" style="min-height:220px;padding:16px;background:white;border:1.5px solid #c4d9cc;border-radius:0 0 9px 9px;font-family:'DM Sans',sans-serif;font-size:14px;line-height:1.8;outline:none;color:#0d1f18;">${item.content||''}</div>`;

  } else if (type === 'mcq') {
    const L2 = ['A','B','C','D','E'];
    const opts = (item.opts||[]).map((o,i)=>
      `<div style="display:flex;align-items:center;gap:9px;margin-bottom:8px;">
        <div style="width:28px;height:28px;background:#e8f5ee;border:1.5px solid #c4d9cc;border-radius:7px;display:flex;align-items:center;justify-content:center;font-weight:700;color:#0d3b2e;font-size:12px;flex-shrink:0;">${L2[i]}</div>
        <input type="text" id="ewO${i}" style="flex:1;padding:9px 12px;background:#f0f6f2;border:1.5px solid #c4d9cc;border-radius:8px;font-family:'DM Sans',sans-serif;font-size:13px;color:#0d1f18;outline:none;" value="${eh(o)}">
        <input type="radio" name="ewCorr" value="${i}" ${i===item.correct?'checked':''} style="width:18px;height:18px;accent-color:#22C97B;cursor:pointer;flex-shrink:0;">
      </div>`).join('');
    html = `<label style="${L}">Category</label><select id="ew1" style="${S}cursor:pointer;"><option value="">Select…</option>${catO}</select>
<label style="${L}">Difficulty</label><select id="ew2" style="${S}cursor:pointer;"><option ${item.diff==='Easy'?'selected':''}>Easy</option><option ${item.diff==='Medium'?'selected':''}>Medium</option><option ${item.diff==='Hard'?'selected':''}>Hard</option></select>
<label style="${L}">Question *</label><textarea id="ew3" style="${S}resize:vertical;min-height:80px;">${eh(item.q||'')}</textarea>
<label style="${L}">Options <span style="font-weight:400;color:#6b9b82;">(⭕ = Correct Answer)</span></label>${opts}
<label style="${L}">Explanation</label><textarea id="ew4" style="${S}resize:vertical;min-height:60px;">${eh(item.exp||'')}</textarea>`;

  } else if (type === 'notes') {
    html = `<label style="${L}">Title *</label><input id="ew1" style="${S}" value="${eh(item.title||'')}">
<label style="${L}">Category</label><select id="ew2" style="${S}cursor:pointer;"><option value="">Select…</option>${catO}</select>
<label style="${L}">Content</label><textarea id="ew3" style="${S}resize:vertical;min-height:200px;">${eh(item.content||'')}</textarea>`;

  } else { // pdf or video
    const urlLabel = type==='video' ? 'YouTube / Video URL' : 'Google Drive / PDF URL';
    html = `<label style="${L}">Title *</label><input id="ew1" style="${S}" value="${eh(item.title||'')}">
<label style="${L}">Category</label><select id="ew2" style="${S}cursor:pointer;"><option value="">Select…</option>${catO}</select>
<label style="${L}">${urlLabel}</label><input id="ew5" type="url" style="${S}" placeholder="https://..." value="${eh(item.url||'')}">
<label style="${L}">Description</label><textarea id="ew3" style="${S}resize:vertical;min-height:80px;">${eh(item.desc||'')}</textarea>`;
  }

  document.getElementById('ewBody').innerHTML = html;
  wrap.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

function eh(s){ return (s||'').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;'); }
function ewCmd(cmd){ document.getElementById('ewContent')?.focus(); document.execCommand(cmd,false,null); }
function closeEW(){ const w=document.getElementById('editWrap'); if(w)w.style.display='none'; document.body.style.overflow=''; ewCtx=null; }

function saveEW() {
  if (!ewCtx) return;

  // Category edit path
  if (ewCtx.type === 'cat') {
    const {id, catType} = ewCtx;
    const newName = document.getElementById('ewCatName')?.value.trim();
    if (!newName) { toast('⚠️ Category naam likhein!','e'); return; }

    if (catType === 'main') {
      const item = DB.cats.find(c => c.id === id);
      if (!item) { toast('Category nahi mili!','e'); return; }
      item.name = newName;
      item.icon = document.getElementById('ewCatIcon')?.value.trim() || item.icon;
      item.color = document.getElementById('ewCatColor')?.value || item.color;
      const showVal = document.getElementById('ewCatShow')?.value;
      item.show = (showVal === 'yes');
      renderHomeCats(); refreshNavCats(); refreshFooterCats();
    } else if (catType === 'sub') {
      const item = DB.subcats.find(s => s.id === id);
      if (item) item.name = newName;
    } else if (catType === 'subsub') {
      const item = DB.subsubcats.find(x => x.id === id);
      if (item) item.name = newName;
    }
    refreshAllCatSelects(); refreshPTDropdowns(); refreshSSCMainDropdown();
    renderCatTable();
    updateDashStats();
    logAct('✏️','Category edit kiya — '+newName,'st-pub','Edited');
    saveDB();
    toast('✅ Category update ho gayi!','s');
    closeEW();
    return;
  }

  const {type, idx} = ewCtx;
  const dbs = {article:DB.articles, mcq:DB.mcqs, pdf:DB.pdfs, video:DB.videos, notes:DB.notes};
  const item = dbs[type][idx];
  if (!item) return;

  if (type === 'article') {
    const t = document.getElementById('ew1')?.value.trim();
    if (!t) { toast('⚠️ Title likhein!','e'); return; }
    item.title=t; item.cat=document.getElementById('ew2')?.value||item.cat;
    item.author=document.getElementById('ew3')?.value.trim()||item.author;
    item.excerpt=document.getElementById('ew4')?.value.trim()||item.excerpt;
    item.content=document.getElementById('ewContent')?.innerHTML||item.content;
    renderHomeBlog(); renderBlogPage(); reDrawArtList();

  } else if (type === 'mcq') {
    const q=document.getElementById('ew3')?.value.trim(); if(!q){toast('⚠️ Question likhein!','e');return;}
    const catName=document.getElementById('ew1')?.value;
    const catObj=DB.cats.find(c=>c.name===catName);
    item.q=q; item.catName=catName; item.cat=catObj?catObj.id:item.cat;
    item.diff=document.getElementById('ew2')?.value||item.diff;
    item.exp=document.getElementById('ew4')?.value.trim()||'';
    const opts=[]; for(let i=0;i<5;i++){const inp=document.getElementById('ewO'+i);if(inp&&inp.value.trim())opts.push(inp.value.trim());}
    if(opts.length) item.opts=opts;
    const radios=document.querySelectorAll('input[name="ewCorr"]');
    const correct=Array.from(radios).findIndex(r=>r.checked);
    if(correct>=0) item.correct=correct;
    renderHomeMcqs(); renderMcqTable();

  } else if (type === 'notes') {
    const t=document.getElementById('ew1')?.value.trim(); if(!t){toast('⚠️ Title likhein!','e');return;}
    item.title=t; item.cat=document.getElementById('ew2')?.value||item.cat;
    item.content=document.getElementById('ew3')?.value||item.content;
    const cObj=DB.cats.find(c=>c.name===item.cat); item.catId=cObj?cObj.id:item.catId;
    renderHomeNotes(); reDrawList('notesList',DB.notes,'notes');

  } else if (type==='pdf'||type==='video') {
    const t=document.getElementById('ew1')?.value.trim(); if(!t){toast('⚠️ Title likhein!','e');return;}
    item.title=t; item.cat=document.getElementById('ew2')?.value||item.cat;
    item.desc=document.getElementById('ew3')?.value.trim()||'';
    item.url=document.getElementById('ew5')?.value.trim()||item.url||'';
    const cObj=DB.cats.find(c=>c.name===item.cat); item.catId=cObj?cObj.id:item.catId;
    if(type==='pdf'){renderHomePdfs();reDrawList('pdfList',DB.pdfs,'pdf');}
    else{renderHomeVideos();reDrawList('vidList',DB.videos,'video');}
  }

  logAct('✏️', type+' edit kiya', 'st-pub', 'Edited');
  updateDashStats();
  saveDB();
  renderAllContent();
  toast('✅ Update ho gaya!','s');
  closeEW();
}

/* ══ ADMIN LIST RE-RENDERS ══ */
function reDrawArtList() {
  const el=document.getElementById('artList'); if(!el) return;
  const ac=document.getElementById('artCount'); if(ac) ac.textContent=DB.articles.length;
  if(!DB.articles.length){el.innerHTML='<div class="pub-empty">No articles yet. 📰</div>';return;}
  el.innerHTML=[...DB.articles].reverse().map(a=>
    `<div class="pub-card">
      <div class="pub-icon" style="background:${a.bg||'rgba(74,158,245,.12)'};font-size:20px;">${a.emoji||'📝'}</div>
      <div class="pub-body"><div class="pub-title">${a.title}</div><div class="pub-meta">📂 ${a.cat} · 📅 ${a.date} · ✍️ ${a.author||''} <span class="st st-pub" style="margin-left:6px;">Live</span></div></div>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('article','${a.id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delArt('${a.id}',this)">Del</button>
      </div></div>`).join('');
}

function reDrawList(listId, arr, type) {
  const el=document.getElementById(listId); if(!el) return;
  const icons={pdf:'📄',video:'🎥',notes:'📓'};
  const bgs={pdf:'rgba(74,158,245,.12)',video:'rgba(245,200,66,.12)',notes:'rgba(255,107,91,.12)'};
  const cntId={pdf:'pdfCount',video:'vidCount',notes:'notesCount'};
  const cnt=document.getElementById(cntId[type]); if(cnt) cnt.textContent=arr.length;
  if(!arr.length){el.innerHTML='<div class="pub-empty">Nothing yet.</div>';return;}
  el.innerHTML=[...arr].reverse().map(item=>
    `<div class="pub-card">
      <div class="pub-icon" style="background:${bgs[type]};font-size:18px;">${icons[type]}</div>
      <div class="pub-body"><div class="pub-title">${item.title}</div><div class="pub-meta">${type.toUpperCase()} · 📂 ${item.cat} · 📅 ${item.date} <span class="st st-pub" style="margin-left:6px;">Live</span></div></div>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('${type}','${item.id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delPub('${type}','${item.id}',this)">Del</button>
      </div></div>`).join('');
}

function delPub(type,id,btn) {
  if(!confirm('Delete karein?'))return;
  if(type==='pdf') DB.pdfs=DB.pdfs.filter(x=>x.id!==id);
  else if(type==='video') DB.videos=DB.videos.filter(x=>x.id!==id);
  else if(type==='notes') DB.notes=DB.notes.filter(x=>x.id!==id);
  btn.closest('.pub-card').remove();
  if(type==='pdf') renderHomePdfs();
  else if(type==='video') renderHomeVideos();
  else if(type==='notes') renderHomeNotes();
  updateDashStats();
  logAct('🗑️',type+' deleted','st-del','Deleted');
  saveDB();
  renderAllContent();
  toast('🗑️ Delete ho gaya!','e');
}

/* ══ CHANGE PASSWORD ══ */
var ADMIN_PWD = ''; // Stored securely on server — admin verification via API
async function changeAdmPwd() {
  const inp = document.querySelectorAll('#admt-settings input[type="password"]');
  const old=inp[0]?.value||'', nw=inp[1]?.value||'', cf=inp[2]?.value||'';
  if(!old||!nw||!cf){toast('⚠️ Tamam 3 fields bharein!','e');return;}
  if(nw.length<6){toast('⚠️ Min 6 characters!','e');return;}
  if(nw!==cf){toast('⚠️ Passwords match nahi karte!','e');return;}
  try {
    const r = await fetch(API_URL + '?action=change_admin_pwd', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({old_password: old, new_password: nw})
    });
    const res = await r.json();
    if (res.success) {
      inp.forEach(i=>{if(i)i.value='';});
      logAct('🔐','Password changed','st-pub','Security');
      toast('✅ Password update ho gaya! Next login mein naya use karein.','s');
    } else {
      toast('⚠️ ' + (res.error || 'Error'), 'e');
    }
  } catch(e) { toast('⚠️ Server error','e'); }
}

/* ══ SITEMAP ══ */
function renderSitemap() {
  const el=document.getElementById('sitemapCats'); if(!el) return;
  el.innerHTML=DB.cats.filter(c=>c.show===true||c.show==='yes').map(c=>
    `<a onclick="openCatPage('${c.id}')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">${c.icon} ${c.name}</a>`
  ).join('');
}

/* ══ CONTACT SUBMIT ══ */
function submitContact() {
  const n=document.getElementById('ctName')?.value.trim();
  const e=document.getElementById('ctEmail')?.value.trim();
  const m=document.getElementById('ctMsg')?.value.trim();
  if(!n||!e||!m){toast('⚠️ Tamam fields bharein!','e');return;}
  ['ctName','ctEmail','ctMsg'].forEach(id=>{const el=document.getElementById(id);if(el)el.value='';});
  toast('✅ Message bhej diya! Jald reply milega.','s');
}


function renderAllContent() {
  const list = document.getElementById('allContentList');
  if (!list) return;
  list.innerHTML = '';

  const allItems = [
    ...DB.articles.map(a => ({type:'article', icon:'📰', bg:'rgba(74,158,245,.1)', title:a.title, cat:a.cat, date:a.date, id:a.id})),
    ...DB.mcqs.map(m => ({type:'mcq', icon:'❓', bg:'rgba(34,201,123,.1)', title:(m.q||'').substring(0,60)+'…', cat:m.catName||m.cat, date:m.date, id:m.id})),
    ...DB.pdfs.map(p => ({type:'pdf', icon:'📄', bg:'rgba(74,158,245,.1)', title:p.title, cat:p.cat, date:p.date, id:p.id})),
    ...DB.videos.map(v => ({type:'video', icon:'🎥', bg:'rgba(245,200,66,.1)', title:v.title, cat:v.cat, date:v.date, id:v.id})),
    ...DB.notes.map(n => ({type:'notes', icon:'📓', bg:'rgba(255,107,91,.1)', title:n.title, cat:n.cat, date:n.date, id:n.id})),
  ];

  if (!allItems.length) {
    list.innerHTML = '<div class="pub-empty">Koi content publish nahi kiya gaya abhi.</div>';
    return;
  }

  list.innerHTML = allItems.reverse().map(item =>
    `<div class="pub-card" data-type="${item.type}">
      <div class="pub-icon" style="background:${item.bg};font-size:20px;">${item.icon}</div>
      <div class="pub-body">
        <div class="pub-title">${item.title}</div>
        <div class="pub-meta">${item.type.toUpperCase()} · 📂 ${item.cat} · 📅 ${item.date} <span class="st st-pub" style="margin-left:6px;">Live</span></div>
      </div>
      <div class="pub-actions">
        <button class="ab ab-o" style="padding:4px 9px;font-size:11px;" onclick="openEditModal('${item.type}','${item.id}')">✏️ Edit</button>
        <button class="ab ab-d" style="padding:4px 9px;font-size:11px;" onclick="delAllContent('${item.type}','${item.id}')">🗑️ Del</button>
      </div>
    </div>`
  ).join('');
}

function delAllContent(type, id) {
  if (!confirm('Delete karein?')) return;
  if (type==='article') { DB.articles = DB.articles.filter(x=>x.id!==id); renderHomeBlog(); renderBlogPage(); reDrawArtList(); }
  else if (type==='mcq') { DB.mcqs = DB.mcqs.filter(x=>x.id!==id); renderHomeMcqs(); renderMcqTable(); }
  else if (type==='pdf') { DB.pdfs = DB.pdfs.filter(x=>x.id!==id); renderHomePdfs(); reDrawList('pdfList',DB.pdfs,'pdf'); }
  else if (type==='video') { DB.videos = DB.videos.filter(x=>x.id!==id); renderHomeVideos(); reDrawList('vidList',DB.videos,'video'); }
  else if (type==='notes') { DB.notes = DB.notes.filter(x=>x.id!==id); renderHomeNotes(); reDrawList('notesList',DB.notes,'notes'); }
  updateDashStats();
  logAct('🗑️', type+' deleted','st-del','Deleted');
  saveDB();
  renderAllContent();
  toast('🗑️ Delete ho gaya!','e');
}

</script>

<!-- ░░ CONTENT PAGE (PDF/Video/Notes detail) ░░ -->
<div class="page" id="page-content">
  <div style="background:var(--bg2);border-bottom:1px solid var(--border);padding:9px 24px;font-size:13px;color:var(--text3);" id="ctntBread"></div>
  <div style="max-width:820px;margin:28px auto;padding:0 24px 48px;">
    <div style="background:var(--white);border-radius:20px;border:1.5px solid var(--border);overflow:hidden;box-shadow:var(--sh);">
      <div id="ctntHero" style="padding:32px;background:linear-gradient(135deg,var(--forest),var(--forest2));color:white;">
        <div id="ctntType" style="font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--emlt);margin-bottom:10px;"></div>
        <div id="ctntTitle" style="font-family:'Playfair Display',serif;font-size:28px;font-weight:900;margin-bottom:8px;line-height:1.2;"></div>
        <div id="ctntMeta" style="font-size:13px;color:#a8d4bc;"></div>
      </div>
      <div style="padding:28px 30px;">
        <div id="ctntBody"></div>
        <div style="margin-top:24px;padding-top:16px;border-top:1.5px solid var(--border);">
          <button class="btn btn-o" id="ctntBack" onclick="history.length>1?history.back():go('home')">← Wapis Jaein</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ░░ HELP PAGE ░░ -->
<div class="page" id="page-help">
  <div class="pg-header"><div class="container"><h2>❓ Help Center</h2><p>Aksar pooche jane wale sawalaat</p></div></div>
  <div style="max-width:820px;margin:32px auto;padding:0 24px 48px;">
    <div style="background:var(--white);border-radius:20px;border:1.5px solid var(--border);padding:32px;box-shadow:var(--sh);">
      <div style="font-family:'Playfair Display',serif;font-size:22px;color:var(--forest);font-weight:800;margin-bottom:22px;">Vokomoon Help Center</div>
      <div style="display:flex;flex-direction:column;gap:12px;">
        <div style="border:1.5px solid var(--border);border-radius:12px;overflow:hidden;"><div style="padding:14px 18px;background:rgba(34,201,123,.06);font-size:14px;font-weight:700;color:var(--forest);">📖 MCQs kaise practice karein?</div><div style="padding:13px 18px;font-size:13.5px;color:var(--text2);line-height:1.8;">Homepage par category click karein → MCQ set choose karein → question solve karein → Submit karo. Har question ke saath explanation bhi milti hai.</div></div>
        <div style="border:1.5px solid var(--border);border-radius:12px;overflow:hidden;"><div style="padding:14px 18px;background:rgba(34,201,123,.06);font-size:14px;font-weight:700;color:var(--forest);">📲 Question kaise poochein?</div><div style="padding:13px 18px;font-size:13.5px;color:var(--text2);line-height:1.8;">Nav bar mein "Ask Question" par click karein. Apna naam, WhatsApp number aur sawal likhein. Admin seedha WhatsApp par jawab bhejega.</div></div>
        <div style="border:1.5px solid var(--border);border-radius:12px;overflow:hidden;"><div style="padding:14px 18px;background:rgba(34,201,123,.06);font-size:14px;font-weight:700;color:var(--forest);">🔐 Admin Panel kaise kholein?</div><div style="padding:13px 18px;font-size:13.5px;color:var(--text2);line-height:1.8;">only acces admin </div></div>
        <div style="border:1.5px solid var(--border);border-radius:12px;overflow:hidden;"><div style="padding:14px 18px;background:rgba(34,201,123,.06);font-size:14px;font-weight:700;color:var(--forest);">📱 WhatsApp group join karein</div><div style="padding:13px 18px;font-size:13.5px;color:var(--text2);line-height:1.8;">Daily MCQs ke liye: <a href="https://wa.me/923039181337" target="_blank" style="color:var(--em);font-weight:700;">+92 303 9181337</a></div></div>
      </div>
      <div style="margin-top:22px;text-align:center;"><button class="btn btn-p" onclick="go('contact')">📩 Contact Us</button></div>
    </div>
  </div>
</div>

<!-- ░░ CONTACT PAGE ░░ -->
<div class="page" id="page-contact">
  <div class="pg-header"><div class="container"><h2>📩 Contact Us</h2><p>Hum yahan hain — kisi bhi waqt</p></div></div>
  <div style="max-width:860px;margin:32px auto;padding:0 24px 48px;">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:22px;">
      <div style="background:var(--white);border-radius:20px;border:1.5px solid var(--border);padding:26px;box-shadow:var(--sh);">
        <div style="font-family:'Playfair Display',serif;font-size:19px;color:var(--forest);font-weight:800;margin-bottom:18px;">Message Bhejein</div>
        <div style="margin-bottom:12px;"><label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:5px;">Naam *</label><input type="text" id="ctName" style="width:100%;padding:10px 13px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;box-sizing:border-box;" placeholder="Aapka naam"></div>
        <div style="margin-bottom:12px;"><label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:5px;">Email / WhatsApp *</label><input type="text" id="ctEmail" style="width:100%;padding:10px 13px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;box-sizing:border-box;" placeholder="email ya 03XXXXXXXXX"></div>
        <div style="margin-bottom:16px;"><label style="font-size:12.5px;font-weight:700;color:var(--text2);display:block;margin-bottom:5px;">Message *</label><textarea id="ctMsg" style="width:100%;padding:10px 13px;background:var(--bg);border:1.5px solid var(--border);border-radius:10px;font-family:'DM Sans',sans-serif;font-size:14px;outline:none;resize:vertical;min-height:100px;box-sizing:border-box;" placeholder="Apna message…"></textarea></div>
        <button class="btn btn-p" style="width:100%;justify-content:center;padding:12px;" onclick="submitContact()">📩 Send</button>
      </div>
      <div style="display:flex;flex-direction:column;gap:14px;">
        <div style="background:linear-gradient(135deg,var(--forest),var(--forest2));border-radius:16px;padding:22px;color:white;">
          <div style="font-size:17px;font-weight:800;margin-bottom:14px;">📞 Direct</div>
          <a href="https://wa.me/923039181337" target="_blank" style="display:flex;align-items:center;gap:11px;background:rgba(255,255,255,.1);border-radius:11px;padding:13px;text-decoration:none;margin-bottom:9px;"><span style="font-size:22px;">📲</span><div><div style="font-size:14px;font-weight:700;color:white;">WhatsApp</div><div style="font-size:12px;color:#a8d4bc;">+92 303 9181337</div></div></a>
          <div style="display:flex;align-items:center;gap:11px;background:rgba(255,255,255,.1);border-radius:11px;padding:13px;"><span style="font-size:22px;">📧</span><div><div style="font-size:14px;font-weight:700;color:white;">Email</div><div style="font-size:12px;color:#a8d4bc;">contact@mcqmaster.pk</div></div></div>
        </div>
        <div style="background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:18px;"><div style="font-size:15px;font-weight:700;color:var(--forest);margin-bottom:10px;">⏰ Response Time</div><div style="font-size:13px;color:var(--text2);line-height:2;">WhatsApp: <b style="color:var(--forest2);">2-3 ghante</b><br>Email: <b style="color:var(--forest2);">24 ghante</b></div></div>
      </div>
    </div>
  </div>
</div>

<!-- ░░ SITEMAP PAGE ░░ -->
<div class="page" id="page-sitemap">
  <div class="pg-header"><div class="container"><h2>🗺️ Sitemap</h2><p>Vokomoon ke tamam pages</p></div></div>
  <div style="max-width:860px;margin:32px auto;padding:0 24px 48px;">
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:18px;">
      <div style="background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:18px;"><div style="font-size:14px;font-weight:800;color:var(--forest);margin-bottom:12px;">📚 Main</div><a onclick="go('home')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">🏠 Home</a><a onclick="go('blog')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">✍️ Blog</a><a onclick="go('interview')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">💼 Interview</a><a onclick="go('ask')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;">❓ Ask</a></div>
      <div style="background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:18px;"><div style="font-size:14px;font-weight:800;color:var(--forest);margin-bottom:12px;">🏷️ Categories</div><div id="sitemapCats"></div></div>
      <div style="background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:18px;"><div style="font-size:14px;font-weight:800;color:var(--forest);margin-bottom:12px;">ℹ️ Info</div><a onclick="go('help')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">❓ Help</a><a onclick="go('contact')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;border-bottom:1px solid var(--bg2);">📩 Contact</a><a onclick="go('admin')" style="display:block;font-size:13px;color:var(--text2);cursor:pointer;padding:5px 0;">🛡️ Admin</a></div>
    </div>
  </div>
</div>

<!-- EDIT MODAL -->
<div id="editWrap" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.65);backdrop-filter:blur(6px);z-index:99999;align-items:center;justify-content:center;padding:16px;">
  <div style="background:white;border-radius:20px;width:100%;max-width:680px;max-height:92vh;overflow-y:auto;box-shadow:0 30px 80px rgba(0,0,0,.35);">
    <div style="background:linear-gradient(135deg,#0D3B2E,#1A5C47);padding:18px 24px;border-radius:20px 20px 0 0;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:5;">
      <div id="ewTitle" style="font-family:'Playfair Display',serif;font-size:19px;font-weight:800;color:white;"></div>
      <button onclick="closeEW()" style="width:30px;height:30px;background:rgba(255,255,255,.15);border:none;border-radius:50%;cursor:pointer;color:white;font-size:18px;line-height:1;display:flex;align-items:center;justify-content:center;">×</button>
    </div>
    <div id="ewBody" style="padding:22px;"></div>
    <div style="padding:14px 22px;border-top:1px solid #e4efe8;display:flex;gap:10px;justify-content:flex-end;background:#f8fdf8;border-radius:0 0 20px 20px;">
      <button onclick="closeEW()" style="padding:10px 20px;border-radius:40px;border:2px solid #c4d9cc;background:transparent;color:#2d5c45;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;cursor:pointer;">Cancel</button>
      <button onclick="saveEW()" style="padding:10px 22px;border-radius:40px;border:none;background:linear-gradient(135deg,#22C97B,#1A5C47);color:white;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;cursor:pointer;">💾 Save Changes</button>
    </div>
  </div>
</div>

</body>
</html>