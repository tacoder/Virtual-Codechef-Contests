<?php require("../../includes/header.php"); ?><h1>Pilgrimage</h1><div class="content">
<p>Professor PariBrajika is in Himalpur and wishes to go to Gyankut to attend a workshop. There are <b>K</b> temples on the way to Gyankut. The temples are numbered from 1 to <b>K</b>, Himalpur is numbered 0 and Gyankut is numbered <b>K+1</b>. She wishes to visit some of the temples on her onward journey from Himalpur to Gyankut, and the rest on her return journey from Gyankut to Himalpur. In her onward journey she must visit the chosen temples in ascending order of their numbers, and in her return journey she is required to visit the temples in descending order of their numbers. Any violation of this will waylay her and she will get permanently lost. For example, if <b>K</b> = 7, and she selects to visit (2,4,5) on her onward journey, she must travel from Himalpur to 2, 2 to 4, 4 to 5, 5 to Gyankut and then Gyankut to 7, 7 to 6, 6 to 3, 3 to 1, and 1 to Himalpur.</p>
<p>The estimated travel times between any pair of the locations (with no intermediate stops) are known. A trip from any location <b>X</b> to another location <b>Y</b> takes the same time as the trip from <b>Y</b> to <b>X</b>. Assume that Professor PariBrajika spends a fixed time <b>R</b> at each of the <b>K</b> temples and at Gyankut.</p>
<p>If she starts from Himalpur at time <i>t</i> = 0, what is the minimum estimated time in which Professor PariBrajika can complete the tour from Himalpur to Gyankut and back?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N</b> (0 &lt; <b>N</b> &le; 3).</p>
<p>For each test case, the first line contains the two integers, <b>K</b> (0 &lt; <b>K</b> &le; 100) and <b>R</b>. This is followed by <b>K+2</b> lines, with each line containing information about travel time from one location to all other locations. Each line starts with an integer id <b>X</b> of the location (0 &lt; <b>X</b> &lt; <b>K+1</b>), followed by <b>K+1</b> pairs of integers (total <b>2K+2</b> integers), with each pair containing the id <b>Y</b> (0 &lt; <b>Y</b> &lt; <b>K+1</b>, <b>X</b> &ne; <b>Y</b>) of another location and the estimated travel time (positive integer) to location <b>Y</b> from location <b>X</b>.</p>
<h3>Output</h3>
<p>For each test case, in the first line, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating estimated minimum travel time.</p>
<h3>Sample Input</h3>
<pre>
2 
3 10
0 1 100 2 200 3 300 4 400 
1 0 100 2 100 3 200 4 300 
2 0 200 1 100 3 100 4 200 
3 0 300 1 200 2 100 4 100 
4 0 400 1 300 2 200 3 100 
5 10 
0 1 63 2 126 3 189 4 252 5 315 6 378 
1 0 63 2 51 3 102 4 153 5 204 6 255 
2 0 126 1 51 3 116 4 232 5 348 6 464 
3 0 189 1 102 2 116 4 71 5 142 6 213 
4 0 252 1 153 2 232 3 71 5 132 6 264 
5 0 315 1 204 2 348 3 142 4 132 6 63 
6 0 378 1 255 2 464 3 213 4 264 5 63
</pre><h3>Sample Output</h3>
<pre>
Case 1: 840
Case 2: 886
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>