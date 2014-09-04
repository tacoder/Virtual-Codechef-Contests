<?php require("../../includes/header.php"); ?><h1>Castle Black Patrols</h1><div class="content">
<p>
The survivors of the ranging beyond the Wall have decided to patrol castle Black every night. With death marching on the Wall as winter draws near each patrol group has agreed it will patrol particular passages of the castle. They will patrol all passages that will enable them to begin at a particular point of the castle and return to it after their patrol. Each patrol group will patrol each passage only once. The men of castle black will patrol all such possible patrol paths.<br /><br /></p>
<p>The castle can be thought to be of made junctions and passages. Junctions are places where 2 or more passages meet.<br /><br /></p>
<p>However there is one problem. The men want their patrol passages to be lit with weirwood - a very special kind of wood that keeps away the dead. The amount of weirwood required to light each passage depends on the passage. They have decided to light at least one passage of their patrol with weirwood, for the night is dark and full of terrors.<br /><br /></p>
<p>You are Samwell Tarly, a steward of the Night's Watch and since weirwood is a rare thing Maester Aemon has asked you to calculate the least amount of weirwood required per night given the Castle Black's description.
</p>
<h3>Input</h3>
<p>
First line of the input contains <b>T</b> - the number of test cases. There is a blank line at the beginning of each test case.<br /></p>
<p>First line of each test case consists of 2 numbers <b>N M</b><br />
<br /><br />
<b>N</b> - number of junctions. Each junction for simplicity is given a number between <b>1</b> and <b>N</b> inclusive.<br /><br />
<b>M</b> - number of passages.<br />
<br /><br />
<b>M</b> lines follow each describing a passage. Each line consists of 3 numbers <b>X Y Z</b><br /><br />
<b>X</b> and <b>Y</b> are the junctions the passage connects and <b>Z</b> is the number of logs of weirwood required to light the passage for one night.</p>
<h3>Output</h3>
<p>
The minimum logs of weirwood required per night to make sure the patrols feel safe.<br />
Answer to each test case must be on a line of its own.
</p>
<h3>Constraints</h3>
<p><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></p>
<p><b>3</b> &lt;= <b>N</b> &lt;= <b>1000</b></p>
<p><b>3</b> &lt;= <b>M</b> &lt;= <b>400000</b></p>
<p><b>1</b> &lt;= <b>X, Y</b> &lt;= <b>N</b></p>
<p><b>1</b> &lt;= <b>Z</b> &lt;= <b>10000</b></p>
<h3>Warning</h3>
<p>Large I/O. Use fast I/O routines.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1

6 7
1 2 8
2 4 5
4 6 7
6 5 2
5 3 3
3 4 1
1 3 4

<b>Output:</b>
3
</pre><h3>Explanation</h3>
<p>
Here there are 3 patrol paths:</p>
<p>(1-2, 2-4, 4-3, 3-1)</p>
<p>(3-4, 4-6, 6-5, 5-3)</p>
<p>(1-3, 3-5, 5-6, 6-4, 4-2, 2-1)</p>
<p>Passages (3 4) and (6 5) need to be light up so that the patrol units feel safe during their patrols of the castle.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kushagra_om">kushagra_om</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2013</td>
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