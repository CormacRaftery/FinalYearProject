# FinalYearProject

## [Contents](#contents)
* [Project Details](#details)
* [Introduction](#introduction)
* [Features](#features)
* [Prerequisites](#prerequisites)
* [How to deploy](#deploy)
* [Technologies Incorporated & Architecture](#architecture) 
* [Conclusion](#conclusion)
* [References](#references)

| Project Details   |     |
| --- | --- |
| **Course** | BSc (Hons) in Software Development  |
| **Module** |  Applied Project and Minor Dissertation |
| **College** | [GMIT](http://www.gmit.ie/) Galway |
| **Student** | Cormac Raftery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; G00348802 |
| **Project Supervisor** | Mr Gerard Harrison |
| **Module Supervisor** | Dr John Healy |

# Introduction<a name = "introduction"></a>
For my final year project I have decided to create a Server-client Unity application that allows multiplayer functionality and saves all data to a custom sql database. I have been inspired to do this project due to an interest in the gaming industry and to further my knowledge in database management. The aim for this project is to allow friends to play together and be able to save their progress. This Readme is only a short summary of the project while a much deeper look into the project is detailed in the Dissertation above.

# Features<a name = "features"></a>
This project provides a simple unity game with the option to save data to a database.

# Prerequisites <a name = "prerequisites"></a>
Before launching the project you should ensure you have each of the following technologies installed.
MAMP5.7

# How to deploy<a name = "deploy"></a>
To deploy this product locally you can simply clone this repository and run MAMP. You should then click "Open WebStart page" in MAMP and click on the hyperlink to "phpmyadmin".
Once on phpmyadmin create a database called "unityaccess". You should then receive a prompt to create a table which should be named players. The database should then be created as follows: Id of type INT and length 10, hash of type VARCHAR and length 100, Id of type int and length 10, salt of type VARCHAR and length 50, score of type int and length 10, username of type VARCHAR and length 16. You will have now created your database and all that is left is to run the Game.exe file.

# Technologies Incorporated & Architecture<a name = "architecture"></a>
This project is a server-client-database application, using MAMP as the data tier and unity as the logic and presentation tier.

# Conclusion<a name = "conclusion"></a>
While the project did not reach all its original goals, it still provided basic functionality for a classic game which saves data to a structured database. Exploring multiple aspects of game design was very interesting trying to mesh them together and a lot was learned from the project.

# References<a name = "references"></a>
This is a collection of the references I used while developing the project.
