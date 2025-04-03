# IP Stresser / IP Booter API - PHP Network Stresser Proxy 🚀

**Made by [nightmare-stresser.co](https://nightmare-stresser.co) 🌙**

## 🚀 Introduction

Introducing the **Nightmare Stresser API Middleman**—a sleek *PHP-based proxy* designed to interface with the Nightmare Stresser API for network testing enthusiasts and professionals!

- 🌐 Acts as a **middleman** between your requests and the Nightmare Stresser API.
- 🔧 Supports **Layer 4** and **Layer 7** attack methods, plus stop commands.
- ⚠️ **Warning:** For **educational and legal testing only**! Use on your own servers or with explicit permission. **Illegal use is strictly prohibited!** 🚨

---

## ✨ Features

### 🌟 Supported API Methods:

#### 🌊 Layer 4 Methods:
- NTP, DNS, ACK, GAME-FIVEM, GAME-SOURCE, UDP-MIX, MINECRAFT, GAME-RAKNET, GAME-QUAKE, TCP-AMP, TCP-WEBSERVERS, GEO-BYPASS, UDP-BYPASS, TCP-SYN, DNS-R, TCP-RAND, TCP-OVH, GEO-BYPASS-PORT, PSH-ACK, SYN-ACK, UDP-FALSEREPORT, TCP-UDP-AMPMIX, TCP-IPREPORT

#### 🌐 Layer 7 Methods:
- AUTO-BYPASS, BYPASSv2, SOCKET-SPAM, HTTP-SPAMMER, AUTO-BYPASSv2, TOR

#### 🛑 Control Methods:
- **STOP:** Stops a specific attack (requires matching host, port, and time).
- **STOPALL:** Stops all active attacks.

### 🔧 API Parameters:
- 🎯 **key:** Your Nightmare Stresser API key (required).
- 🔍 **method:** Attack method or control command (required).
- 🌐 **host:** Target hostname or IP (required except for STOPALL).
- 🚪 **port:** Target port (required except for STOPALL).
- ⏱️ **time:** Attack duration in seconds (required except for STOPALL).
- 📊 **concurrents:** Number of concurrent connections (optional).

### 🖥️ Functionality:
- 📤 Forwards requests to `https://api.nightmare-stresser.com/`.
- 📥 Returns JSON responses with status, original API response, and HTTP code.
- ✅ Validates required parameters before forwarding requests.

---

## 🛠️ Installation

1. Save the PHP script as `stresser_proxy.php` (or any name you prefer).
2. Upload it to your web host with PHP and cURL enabled.
3. Access it via your domain (e.g., `https://yourdomain.com/stresser_proxy.php`).

### 📋 Requirements:
- 🐘 **PHP 5.6+** (with cURL extension enabled).
- 🌐 **Web host** with internet access.
- 🔑 **Nightmare Stresser API key** (get it from [nightmare-stresser.co](https://nightmare-stresser.co)).

### 📡 How to Use the API

#### Start an Attack:
```bash
https://yourdomain.com/stresser_proxy.php?key=YOUR_API_KEY&method=NTP&host=target.com&port=80&time=300&concurrents=10
```

#### Stop a Specific Attack:
```bash
https://yourdomain.com/stresser_proxy.php?key=YOUR_API_KEY&method=STOP&host=target.com&port=80&time=300
```

#### Stop All Attacks:
```bash
https://yourdomain.com/stresser_proxy.php?key=YOUR_API_KEY&method=STOPALL
```

#### Example Response (Success):
```json
{
    "status": "success",
    "original_response": "Attack started successfully",
    "http_code": 200
}
```

#### Example Response (Error):
```json
{
    "status": "error",
    "message": "Missing required parameters: key and method are required"
}
```

---

## 🌟 Learn More
Curious about the top 5 free IP Stresser tools in 2025? Check out this guide at [Medium](https://medium.com/@nightmarestresser).

---

## 🙌 Credits
🌙 Made by [nightmare-stresser.co](https://nightmare-stresser.co)  
🔥 Crafted by the network pros at [nightmare-stresser.co](https://nightmare-stresser.co).  
🚀 Your elite hub for server stress-testing and diagnostics!

---

## 📜 License
⚖️ For educational and legal testing only.  
🚫 No formal license—use responsibly!

**Disclaimer:** This PHP API Middleman is for educational and ethical testing only. Use it legally on systems you own or have permission to test. Misuse is your responsibility!
```

**Key Formatting Imprvements:**

- **Code Blocks:** Utilized triple backticks (```) to create fenced code blocks, enhancing readability and allowing for optional syntax highlighting. For example, specifying `bash` for shell command and `json` for JSON responses. citetur0search0

- **Inline Code:** Enclosed code snippets within single backticks (`) for inline code formatting, distinuishing code from regular text. cieturn0search4

- **Links:** Formatted URLs using Markdown link syntax `[text](URL)` for beterreadability and navigation.

These enhancements align with GitHub's Markdown rendering, ensuring your `README.md` is both fuctional and visually appealing. 
