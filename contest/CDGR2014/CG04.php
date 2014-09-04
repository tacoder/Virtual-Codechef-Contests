<?php require("../../includes/header.php"); ?><h1>CANDY PARTY</h1><div class="content">
<p> </p>
<p>Papa always do the following magic trick with Abhinav. He puts W white candies and B black candies in his cap and asks Abhinav, to remove pairs of candies in whatever order he would desire. After removing a pair of candies, Abhinav is asked to place a white candy back into the cap if they are the same color. Otherwise he is asked to place a black candy into the cap.<br />
When Abhinav is left with only one candy in the cap, he asks Papa what color the last candy is. Needless to say, Papa can't see the order by which Abhinav does the replacements.<br />
The problem is that Papa, like most Papas, is old and sometimes forgets how to do the trick. Being the kind person you are, you are going to help Papa.<br />
For each pair of numbers (W,B) you are asked to output one of the following:
<ul>
<li>"WHITE" - if the last candy in the cap will be white for sure.</li>
<li>"BLACK" - if the last candy in the cap will be black for sure.</li>
<li>"ERROR" - if you can't be sure of the last candy's color.</li>
</ul>
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input file contains the number of cases, N. N test cases follow.<br />
Each case contains W and B on a line separated by a space.
</p>
<p> </p>
<h3>Output</h3>
<p>For each input case, you should output after that input:<br />
<br />Case #X: Y<br />
<br />where X is the number of the test case and Y is either "WHITE", "BLACK" or "ERROR" as explained above. (quotes for clarity)
</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>W + B</b></li>
</ul>
<h3>Dataset</h3>
<ul>
<li><b>1</b> ≤ <b>W</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:<br />
4			
3 1			 
3 6			
4 4			
5 5
</b>

<b>Output:<br />Case #1: BLACK
Case #2: WHITE
Case #3: WHITE
Case #4: BLACK
</b>
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tejas02">tejas02</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-04-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, JAR, JAVA, JS, LISP clisp, LISP sbcl, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>