<?php require("../../includes/header.php"); ?><h1>Matchsticks</h1><div class="content">

<p align="justify">Chef Ceil has some matchsticks in his kitchen.</p>
<p align="justify"><b>Detail of matchsticks:</b><br /> There are <b>N</b> matchsticks in total. They are numbered from to 0 to <b>N</b>-1 inclusive. All matchsticks have same length. But they may have different rates of burning. For <b>i<sup>th</sup></b> matchstick, we denote <b>b<sub>i</sub></b> as the time required for that matchstick to completely burn-down if lighted at one end.  The matchsticks have uniform rate of burning. If lighted at both ends simultaneously, the matchstick will take only half of the original time to burn down.</p>
<p align="justify"><b>Arrangement:</b><br /> He ties rear end of the all the matchsticks together at one point and the front end is kept free. The matchstick numbered <b>i</b> is adjacent to matchstick numbered <b>i+1</b> for all 0&lt;= <b>i</b> &lt;=<b>N</b>-2.   <i>Bodies of matchsticks do not touch each other, except at rear end.</i> All matchsticks are kept on the floor.</p>
<p align="justify"><b>Task:</b><br /> There are <b>Q</b> queries, in each query we ask: If he lights the free end of all matchsticks numbered between  <b>L</b> and <b>R</b> both inclusive, what will be the time needed for all matchsticks to get completely burnt.</p>
<h3>Input</h3>
<p align="justify">First line of input contains one integer <b>N</b>, total number of matchsticks. The next line contains <b>N</b> space separated integers <b>b<sub>i</sub></b>, where <b>b<sub>i</sub></b> is the <b>time</b> required for <b>i<sup>th</sup></b> matchstick to completely burn-down if lighted at one end.  Next line contains one integer <b>Q</b>, total number of queries you need to answer. Then there are <b>Q</b> queries in next <b>Q</b> lines. Each line has two space separated integers <b>L</b> and <b>R</b>.</p>
<h3>Output</h3>
<p align="justify">Print <b>Q</b> lines, one for each query, printing the answer for each query, that is, the time it will take for all the matchsticks  to get completely burn down. Every time you must print your answer with 1 decimal place.</p>
<h3>Constraints:</h3>
<p>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup> <br /> 1&lt;=<b> b<sub>i</sub> </b>&lt;= 10<sup>8</sup><br /> 1 &lt;= <b>Q</b> &lt;= 10<sup>5</sup><br /> 0 &lt;= <b>L</b> &lt;= <b>R</b> &lt;= <b>N</b>-1</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1
5
1
0 0
<b>Output</b>
5.0

<b>Input</b>
2
3 5
1
0 1
<b>Output</b>
4.0

<b>Input</b>
18
3 4 2 1 5 7 9 7 10 5 12 3 1 1 2 1 3 2
1
4 10
<b>Output</b>
9.0
</pre><p> <b>Explanation</b><br /> <img src="/download/matches.jpg" width="390" height="491" /><br /> For the last input, in figure yellow colored matches are lighted by a lighter simultaneously. The numbers indicate the time required to burn that matchstick (if lighted at one end) Now the first lighted matchstick will completely burn in 5 seconds. Then it will light up all the rest matches from the rear end. Some matches will have fire at both ends and thus after 5 seconds, they will start burning with twice the original rate. Thus time taken for matches to burn completely will be : (from left to right):  8.0, 9.0, 7.0, 6.0, 5.0, 6.0, 7.0, 6.0, 7.5, 5.0, 8.5, 8.0, 6.0, 6.0, 7.0, 6.0, 8.0, 7.0. So, the answer will be 9.0 (the maximum among these).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mkagenius">mkagenius</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-06-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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