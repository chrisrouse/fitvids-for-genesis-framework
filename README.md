fitvids-for-genesis-framework
=============================

Instructions for using FitVids.js with Genesis Framework 2.0

## The Problem

Videos are not responsive out of the box in Genesis Framework 2.0. Responsive theme? Yes. Respons videos? Apparently not.


## The Fix

Use FitVids.js. This is a lightweight JaveScript file (3kb) that will keep videos from YouTube, Vimeo, and others, fully responsive at all viewport sizes.

## Setup

1. Download FitVids.js https://github.com/davatron5000/FitVids.js and extract the files.
2. In your child theme folder (you'll need FTP access), create a folder called **js** in the main directory.
3. Move **jquery.fitvids.js** from the **FitVids.js-master** folder into the **js** folder you just made.
4. Download **FitVides.js** above and drag it into the **js* folder.
5. Copy/paste the enque function from **functions.php** above to the bottom of your **functions.php** file and save.

If you are using Genesis Framework 2, you shouldn't need to modify anything else to make this work for you.
