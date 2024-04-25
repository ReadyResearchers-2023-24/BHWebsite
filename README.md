# Black History Website

## Table of Contents

* [Intro/Motivation](#Intro/Motivation)
* [Realted Work](#Realted-Work)
  + [Other Projects](#Other-Projects)
* [Technical Details](#Technical-Details)
* [Languages Used](#Languages-Used)
* [Accessing the Website](#Accessing-the-Website)
* [Future Plans/Ideas](#Future-Plans/Ideas)

## Intro/Motivation

As mentioned in the article `The Status of Black History in U.S. Schools and Society` by King, LaGarrett J. (https://www.socialstudies.org/system/files/publications/articles/se_810117014.pdf), It says `"The mainstream social studies curriculum, however, either largely ignored Black history or misrepresented the subject."`. With that being said the motivation for this project is to help not only the Black community, but all communities learn about Black history and that there is more to it than just enslavement. This website will teach people (hidden) facts and information that are not taught in schools or that are not elaborated. The goal is to have users look at Black history in a different light if they are not well-educated on the topic. The main way I plan to accomplish this is by making this as informational as possible by putting non-well-known facts about Black history within the website. Another reason is to create one website where people can find all the facts they need about a specific topic within Black history. When doing papers and research people have to jump from site to site to get information about one topic. However, this website I am creating will reduce the amount of time people will spend looking up different websites and skimming through them to find what they need. I want to make this as informational as possible by putting non-well-known facts about Black history within the website.

## Realted Work

A project I have worked on is a prototype for this project. It has a starting page with one of the three topics that are clickable and will take you to a separate page with information related to the topic clicked on. That topic is The Black Panther Movement. The clicked-on page has information related to the subject and pictures for visual purposes. A way to access the prototype is by going to `cmpsc-580-Allegheny-College-Spring-2023/assignment07-watson02` repository. Then you will click on the style folder and you will see two HTML files, `index` and `index-move`. You will click on `index.HTML` for the home page.

### Other Projects

One project I have worked on is my portfolio. It includes a section that lists the different topics, a mission statement, the link to my resume, pictures of the languages I experience with, work samples with links, and more. The link to the website can be found here: https://watson02.github.io.


## Technical Details

The website is going to start with a home page with the title of the site in the center and at the very top of the page. Under it, there is a tab bar, which is at the top of every page, that list `Home`, Feedback Form`, `Website Creator` and `References` for easy access to those pages. The `Home` topic is the home page and its background is red while the other topic's background is dark grey. When the cursor is hovered over them the topic's color will go from white to black while a green bar is displayed under it, as the home topic will also have a green bar under it. These topics will be clickable and when clicked on, will take the user to a different page displaying information about that topic. Under the tab bar, there are ten different topics put into five columns in alphabetical order along with a picture to represent it. Each picture is clickable which when clicked on, the user will be sent to another page about that specific topic. 

Within each of these topics there is a top image to represent the topic. There is also a time line listing information about said topics. Within some of the timeline points there is a scrollbar feature depending on how much content is in it to minimize the amount of negatice space on the other side of that section of the timeline. Within all the pages except for the home page there is side bar. When clicked on it will open and display the other topics so the user would not have to keep going back to the home page to access other topics on the site.

At the bottom of the home page, there is a feedback form that users can fill out to share their thoughts and opions. This form is at the bottom of all the pages and when the user clicks submit, the information filled in will be sent to the developers email address. Below the feedback form on the home page are two circles the one on the left, when clicked on, will tke the user to a page about the websiote creator. This page introduces the user to the website creator and explains why the website was created. The circle to the left, when clicked on, will take the user to a separate page that list links to websites where the images and content were gathered on the site.

## Languages Used

- `HTML` --> Input the information onto the site.
- `CSS` --> For styling and positioning
- `Javascript` --> For functionalities

## Accessing the Website

To access this website you should be in the GitHub repository titled
`ReadyResearchers-2023-24/BHWebsite`
Click the "Clone or download" button that is green and, after ensuring that you have selected "Clone with SSH", please copy this command to your clipboard:
`git@github.com:ReadyResearchers-2023-24/BHWebsite.git`
From there you want go into your terminal and type in the command `git clone` and then paste the command that you just copied. The whole command should look like this:
```
git clone git@github.com:ReadyResearchers-2023-24/BHWebsite.git
```
Then press Enter/Return.

Next, you can type either `ls` (on either MacOS or Linux) or `dir` (on Windows 10 Pro or Windows 10 Enterprise). From there `cd` into the docs file. Once you enter into that file you can see the files `stlye`, `img` and `HTML` files. Enter into the `index.html` file to enter into the home page. You can use `cd` to change into the new directory. If you want to "go back" one directory from your current location, then you can type the command `cd ..`. Finally, please continue to use the cd and ls commands to explore the files that you automatically downloaded from GitHub.

## Future Plans/Ideas

- Add features for engagement (e.g. topic section with subtopics and/or search bar)
- Add Media Queries for mobile responsiveness
