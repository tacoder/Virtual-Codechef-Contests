<?php require("../../includes/header.php"); ?><h1>It Is Axis Time</h1><div class="content">
<p> </p>
<p>Its axis time and the event managers are busy conducting meetings or their events. Each event manager is  seating on a vertex of a table having shape of a regular polygon.</p>
<p>The table has n vertices where n is the number of event managers in the meeting. </p>
<p>Your task is to count the number of isosceles triangles formed such that each vertex of the triangle is a vertex of the table and all managers seating on these 3 vertices are of same gender.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer T. T testcases follow.<br />
For each test case, there is only one line, which consists of a 01-string with length &gt;= 2. <br /><br />
Number of vertices n of the regular<br />
polygon equals length of the string.<br />
<br /><br />
The string represents gender of managers seating on the vertices in clockwise order. 0 represents girls and 1 represents boys.</p>
<h3>Output</h3>
<p>For each test case, output one line in the format <b>Case #t: ans</b>, where t is the case number (starting from 1), and ans is the answer. </p>
<h3>Constraints</h3>
<p>Sum of all n in the input &lt;= 10^6</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
01
0001
10001
111010
1101010

<b>Output:</b>
Case 1: 0
Case 2: 1
Case 3: 1
Case 4: 2
Case 5: 3
</pre><p> </p>
<h3>Explanation</h3>
<p>In case 5, indices of vertices of the three monochromatic isosceles triangles are (0,3,5), (1,3,5) and (2,4,6) (assuming indices<br />
start from 0)</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prongs7">prongs7</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2014</td>
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