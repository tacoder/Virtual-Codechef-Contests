<?php require("../../includes/header.php"); ?><h1>Speeds</h1><div class="content">

<p>
Nonstop Travel </p>
<p>Fast Phil works the late shift and leaves his company's parking lot at precisely 2:00 AM every morning. His route home is </p>
<p>by a straight road which has one or more traffic signals. Phil has always wondered if, given the locations and cycles of </p>
<p>each of the traffic signals, are there velocities he can travel home without ever having to speed up or slow down on </p>
<p>account of a red light. You are to write a program to satisfy his curiosity.</p>
<p>Your program should find all integer speeds (in miles per hour) which can be used for Phil's trip home. Each speed is a </p>
<p>rate (in miles per hour) he can maintain the moment he leaves the parking lot at 2:00 AM until he arrives home (we assume </p>
<p>Phil has a long driveway in which to decelerate) such that he never passes through a red signal. He is allowed to pass </p>
<p>throgh a signal at the exact moment it turns from yellow to red, or at the exact moment a red signal turns green. Since </p>
<p>Phil is a relatively law-abiding citizen, you need only consider speeds less than or equal to 60 mph. Likewise, Phil isn't </p>
<p>interested in travelling too slowly, so you should not consider speeds lower than 30 mph.</p>
<h3>Input</h3>
<p>
Input will consist of one or more sets of data describing a set of traffic signals, followed by the integer -1. The first </p>
<p>integer in each set will contain the value N (specifying the number of traffic signals). N will be no larger than 6. This </p>
<p>value will be followed by N sets of numbers, each containing values (in order) for L, G, Y and R. L is a positive real </p>
<p>number indicating the location of a traffic signal, in miles, from the parking lot. G, Y and R are the lengths of time (in </p>
<p>seconds) of the green, yellow, and red periods of the corresponding traffic signal's cycle. Phil has learned from an </p>
<p>informant in the Highway Department that all N traffic signals start their green period precisely at 2:00 AM.</p>
<p>Output</p>
<h3>Output</h3>
<p>
Output should consist of the input case number (starting with 1) followed by a list of all valid integer speeds Phil may </p>
<p>drive to avoid the red signals. Consecutive integer speeds should be specified in interval notation of the form L-H, where </p>
<p>L and H are the lowest and highest speeds for the interval. Intervals of the form L-L (that is, an interval of length 1) </p>
<p>shold just be written as L. Intervals should be separated by commas. If there are no valid speeds, you program should </p>
<p>display the phrase No acceptable speeds.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

1
5.5  40 8 25

3
10.7  10 2 75
12.5  12 5 57
17.93 15 4 67

-1
<b>Output:</b>
Case 1: 30, 32-33, 36-38, 41-45, 48-54, 59-60
Case 2: No acceptable speeds.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gauravmunjal">gauravmunjal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>