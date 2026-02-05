<!-- PROJECT LOGO -->
<br />
<div align="center">
  <div align="center">
    <a href="https://www.php.net">
        <img
            alt="PHP"
            src="https://www.php.net/images/logos/new-php-logo.svg"
            width="150">
    </a>
  </div>

  <h3>PHP data fetching in VS Code</h3>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation-for-windows">Installation</a></li>
      </ul>
    </li>
    <li><a href="#php-use">PHP Use</a></li>
    <li><a href="#resources">Resources</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#conclusions">Conclusions</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

There are many great languages out there but php is the best!

Here's why:
* In a single file, you can write html, css and javascript alongside php.
* Php allows you to use a large number of rich, pre-defined functions designed for web development.
* Php sessions allow you to securely store cookies.
* You can handle forms, send emails and encrypt data.
* Php works server side meaning it has security designed into its very function.

Because php runs everywhere - almost every shared hosting provider runs php - there is no complicated pipeline required. You just upload your files on the server and it works.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

The project is supported by XAMPP for its php interpreter and database function.

[![php][php.com]][php-url]

[![xampp][apachefriends.org]][xampp-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To set up your project locally please follow the following instructions.

### Prerequisites

This is a list of things you need to run and test php locally with vscode.

* VS Code
* XAMPP

### Installation for Windows


#### VS Code

1. Download VS Code from ```https://code.visualstudio.com/download```
2. Install ```PHP Server``` extension by ```brapifra``` in VS Code.

#### XAMPP

1. Download XAMPP from ```https://www.apachefriends.org/```
2. Install XAMPP
3. Change XAMPP editor folder in config to ```C:\<path to VS Code executable>\Microsoft VS Code\Code.exe```
4. Edit vscode config setting:
  
  a) ```"phpserver.phpPath": "C:/xampp/php/php.exe"```
  
  b) ```"phpserver.phpConfigPath": "C:/xampp/php/php.ini"```

#### Preparing an test API

1. Set up a simple API via Vercel by preparing a file with a JSON structure.
2. Upload file to Github repository.
3. Connect Vercel to this repository, deploy, and await the magic to happen.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- PHPUse -->
## PHP Use

* To get yourself up and running. create a file in VS Code called ```<filename.php>```, and write the following code in the file ```<?php echo'Hello Universe';?>```

* Save your file in ```C:/xampp/htdocs/<project foldername>/<filename>```

* Right click inside the VS Code file window and select ```PHP Server: Serve project```

* View ```http://localhost:3000/<filename>``` in the browser if it does not open automatically.

* To stop the server, right click the VS Code file window and select ```PHP Server: Stop server```

* To demonstrate the code for using cURL in PHP, please see the following video:

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/OKIw5_d0YEQ/0.jpg)](https://www.youtube.com/watch?v=OKIw5_d0YEQ)


<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- RESOURCES -->
## Resources

* Beyond the above, learning PHP and cURL was a relatively simple task due to the amount of help available.
* A good place to start would be a combination of <a href="https://www.w3schools.com/php/default.asp">w3schools</a>, and <a href="https://www.php.net/manual">PHP Docs</a>. These provide a good guide to PHP and its uses.
* Ironically cURL is not in the PHP docs, but this is because it is not a PHP specific. It can bind to over 50 different languages.
* To help with mySQL, we used the following references: <a href="https://www.w3schools.com/mysql/mysql_where.asp">mySQL SELECT and WHERE</a> and <a href="https://mariadb.com/resources/blog/developer-quickstart-php-mysqli-and-mariadb/">Maria DB</a>.


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->
## Roadmap

- [x] Prepare VsCode and XAMPP
- [x] Document VS COde and XAMPP setup
- [x] Demo fetch from API using cURL
- [ ] Document cURL pull
- [ ] Demo fetch from database
- [ ] Document database fetch

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONCLUSIONS -->
## Conclusions

* 


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[php.com]: https://img.shields.io/badge/PHP-8892BE?style=for-the-badge&logo=php&logoColor=white
[php-url]: https://php.net
[apachefriends.org]: https://img.shields.io/badge/XAMPP-orange?style=for-the-badge&logo=xampp&logoColor=white
[xampp-url]: https://apachefriends.org
