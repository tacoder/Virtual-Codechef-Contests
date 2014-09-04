<?php require("../../includes/header.php"); ?><h1>Closing the Tweets</h1><div class="content">

<p align="justify">Little kids, Jack and Evan like playing their favorite game Glass-and-Stone. Today they want to play something new and came across Twitter on their father's laptop.</p>
<p align="justify">They saw it for the first time but were already getting bored to see a bunch of sentences having at most 140 characters each. The only thing they liked to play with it is, closing and opening tweets.</p>
<p align="justify">There are <b>N</b> tweets on the page and each tweet can be opened by clicking on it, to see some statistics related to that tweet. Initially all the tweets are closed. Clicking on an open tweet closes it and clicking on a closed tweet opens it. There is also a button to close all the open tweets. Given a sequence of <b>K</b> clicks by Jack, Evan has to guess the total number of open tweets just after each click. Please help Evan in this game.</p>
<h3>Input</h3>

<p align="justify">First line contains two integers <b>N K</b>, the number of tweets (numbered 1 to <b>N</b>) and the number of clicks respectively (1 ≤ <b>N</b>, <b>K</b> ≤ 1000). Each of the following <b>K</b> lines has one of the following.</p>
<ul>
<li>CLICK <i>X</i> , where <i>X</i> is the tweet number (1 ≤ <i>X</i> ≤ N)</li>
<li>CLOSEALL</li>
</ul>
<p></p>
<h3>Output</h3>

<p align="justify">Output <b>K</b> lines, where the <i>i</i><sup>th</sup> line should contain the number of open tweets just after the <i>i</i><sup>th</sup> click.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 6
CLICK 1
CLICK 2
CLICK 3
CLICK 2
CLOSEALL
CLICK 1

<b>Output:</b>
1
2
3
2
0
1
</pre><p>
<b>Explanation:</b></p>
<p>Let open[x] = 1 if the x<sup>th</sup> tweet is open and 0 if its closed.<br />
Initially open[1..3] = { 0 , 0 , 0 }. Here is the state of open[1..3] after each click and corresponding count of open tweets.</p>
<p>CLICK 1 : { 1, 0, 0 }, open count = 1<br />
CLICK 2 : { 1, 1, 0 }, open count = 2<br />
CLICK 3 : { 1, 1, 1 }, open count = 3<br />
CLICK 2 : { 1, 0, 1 }, open count = 2<br />
CLOSEALL : { 0, 0, 0 }, open count = 0<br />
CLICK 1 : { 1, 0, 0 }, open count = 1</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-06-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>