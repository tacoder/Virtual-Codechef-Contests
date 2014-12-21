<?php require("../../includes/header.php"); ?><h1>Archers and Pikemen</h1><div class="content">
<h3>Problem Description</h3>
<p> </p>
<p>You are being attacked by hostile enemy forces, with knights and swordsmen charging at you. Being the commander of your unit, you have been given the task of arranging your elite archers and pikemen in a special formation.</p>
<p> The archers and pikemen must stand between two flag posts in a straight line (no soldier can stand beyond the flags).<br />
Each archer must have at least two pikemen by his side (one to his left and one to his right) such that he is at equal distances from both of them.<br />
(A pikeman may be shared between two archers).
</p>
<p>
The archers stand at given fixed positions and the separations between them may not be equal.<br />
You need to position your troops in the given formation using the minimum number of pikemen.
</p>
<p>
Assume that the minimum distance between a pikeman and an archer or a pikeman and a flag is <b>1</b> unit. the minimum distance between two archers is <b>2</b> units.
</p>
<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.<br />
<br />
The second line contains an integer <b>N</b> denoting the number of separations.<br />
<br />
The following N lines each contain an integer <b>x</b>, which is the separation of the current archer from the previous one.</p>
<p>
<br />
The first value of <b>x</b> is the separation of the first archer from the first flag. The last value of <b>x</b> is the separation between the last archer and the second flag<br />
 </p>
<h3>Output</h3>

<p>
For each test case, output a single line containing  the minimum number of pikemen required.
</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>2</b> ≤ <b>x</b> ≤  <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
2
3
4
4
2
4
2
2
2
2
</p>

<b>Output:</b>
<p>
3
4
</p>
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1: </b><br />
A possible formation can be :<br />
F---1---p---3---A---3---p---1---A---1---p---1--- F
</p>
<p><b>Example case 2: </b><br />
A possible formation can be :</p>
<p>F---1---p---1---A---1---p---1---A---1---p---1---A---1---p---1---F</p>
<p>F = flag <br />
A = archer<br />
p = pikeman<br />
---d--- = distance between pikeman and archer/flag</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codemaster_tx">codemaster_tx</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>10240 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>