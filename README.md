# Medical Clinic Website 🩺

A responsive multi-page website for a general practitioner / family doctor.  
The site provides an approachable online presence for a medical practice, including information about services, opening hours, news, and contact options.

---

## 🌍 Overview

This project is a static website (with a small PHP contact endpoint) designed for a **general medical clinic**.  
It can be adapted to any individual doctor, group practice, or small healthcare provider.

The focus is on:

- clear structure and easy navigation  
- clean layout and typography  
- accessibility and readability for patients of all ages  

---

## ✨ Features

- **Home page (`index.html`)**
  - Hero section introducing the doctor / clinic  
  - Short description of services  
  - Quick access to important sections (contact, opening hours, etc.)

- **News & Updates (`news.html`, `news-detail.html`)**
  - Overview of clinic news (e.g. holiday opening times, new services)  
  - Detail page for individual news articles

- **Contact page (`contact.php`)**
  - Contact form for patient inquiries  
  - Basic server-side processing in PHP (can be adapted to send emails or store requests)  
  - Contact details and address

- **Donation / support page (`donate.html`)**
  - Optional page for donations, support, or special campaigns

- **Responsive layout**
  - Works on desktop, tablet, and mobile devices  
  - Uses a classic layout with separate `css`, `js`, `fonts`, and `images` folders

---

## 🛠 Tech Stack

- **HTML5** – structure and content  
- **CSS3** – layout, typography, responsive design  
- **JavaScript** (vanilla) – interactive elements  
- **PHP** – simple backend endpoint for the contact form  
- **Custom fonts & images** stored inside the project

No external frameworks are strictly required, which makes the project easy to deploy on simple web hosting.

---

## 📁 Project Structure

```text
.
├── css/              # Stylesheets
├── fonts/            # Web fonts
├── images/           # Clinic images, icons, graphics
├── js/               # JavaScript files
├── contact.php       # Backend handler for contact form
├── donate.html       # Donation / support page
├── index.html        # Home page
├── news.html         # News overview
├── news-detail.html  # News detail page
└── .DS_Store         # macOS system file (can be ignored / removed)
