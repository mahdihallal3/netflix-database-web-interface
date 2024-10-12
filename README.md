# Netflix Database Project

## Project Overview

This project presents a **Netflix Database** that allows users to easily search for movies and TV shows available on Netflix using various criteria such as **genre**, **decade**, **ratings** (from platforms like IMDb, Rotten Tomatoes, and Netflix), and **awards** (Oscar, Golden Globe, Emmy). This project provides a solution for users looking to filter and explore Netflix content more effectively than Netflix's native features. The database is implemented using **SQL**, with a web interface built using **PHP**, **HTML**, **CSS**, and **JavaScript**.

---

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Limitations and Future Work](#limitations-and-future-work)

---

## Introduction

This project is designed to address the limitations of Netflix's current interface, offering users the ability to filter content by award type, view cross-platform ratings, and search content by **decade**, **popularity**, and **genre**. Data is sourced from publicly available datasets, cleaned, and imported into a **MySQL** database. The front-end of the project allows users to perform various queries on the database and retrieve information about movies, TV shows, actors, and directors.

---

## Features

- **Movie and TV Show Search**: Filter by genre, decade, views, and ratings from IMDb, Rotten Tomatoes, and Netflix.
- **Award-Winning Content**: Search for movies and shows by award type (Oscar, Golden Globe, Emmy).
- **Actor and Director Search**: View award-winning actors and directors based on their accomplishments.
- **Cross-Platform Ratings**: Ratings from IMDb, Rotten Tomatoes, and Netflix available in one place.

---

## Installation

### Requirements

To set up and run the project locally, you need the following tools:
1. **XAMPP** or any LAMP/WAMP server with PHP, MySQL, and Apache.
2. **phpMyAdmin** (usually included with XAMPP).

### Steps to Install

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/netflix-database.git
   cd netflix-database

2. **Set Up Database**:
  . Open phpMyAdmin by navigating to http://localhost/phpmyadmin.
  . Create a new database, e.g., netflix_db.
  . Import the provided CSV files located in the data folder into phpMyAdmin:
  . Ensure you check "First row contains column names" when importing.
  . Set the primary keys and foreign keys as described in the project's schema.

3. **Configure Database Connection**:
   . Open the "DataInfo.php" file in the "include" folder
   . Setup your DB credentials accordingly, like:
       $db_host = "localhost";
       $db_user = "root";
       $db_pass = "";  // Add your password if applicable
       $db_name = "netflix_db";

4. **Run the Website**:
   . Start XAMPP and ensure Apache and MySQL services are running
   . Move the project folder to the htdocs directory in your XAMPP installation (or equivalent directory for your server)
   . Open a browser and go to http://localhost/netflix-database ("netflix-database" is to be replaced by whatever name you choose for the project folder you place in htdocs)
   . VERY IMPORTANT: Click on OPEN_ME.php for the web interface to appear, it will be in a list of folders listed on a white page once you put the link in the browser.

---

##Limitations and Future Work

- **Static Data**: The data is not dynamically updated, and new entries will require manual updates.
- **Future Improvements**: Integrating web scraping to dynamically fetch new data and possibly expanding to other streaming services (e.g., Hulu, Amazon Prime).



