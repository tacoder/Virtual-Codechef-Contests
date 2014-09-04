<?php require("../../includes/header.php"); ?><h1>Safe Routes</h1><div class="content">
<p>Alice is the queen of ChefLand. She has initiated a road reform recently. The reform will last for <b>M</b> days.</p>
<p>Initially, there are <b>N</b> towns and no roads in ChefLand. Every day one bidirectional road will be built. On the <b>i</b>-th day, the road connecting the towns <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> will be built.</p>
<p>Nevertheless, Alice worries that if there is a road that will occur in <b>every</b> route from the town <b>A</b> to the town <b>B</b> for some pair of towns <b>A</b> and <b>B</b>, criminals might attack everyone who is traveling from the town <b>A</b> to the town <b>B</b> (or vice versa) for sure. So she calls such an unordered pair (<b>A</b>, <b>B</b>) <i>unsafe</i>.</p>
<p>You are given a plan of the road reform. Please, output the number of unsafe unordered pairs of towns, after each of <b>M</b> days.</p>
<h3>Input</h3>
<p>The first line of input consists of the numbers <b>N</b> and <b>M</b> - the number of towns and the number of days.<br /><br />
The following <b>M</b> lines will describe the road reform. The <b>i</b>-th line will contain two integers <b>X</b> <b>Y</b>. That means that the bidirectional road, connecting the towns <b>X</b> and <b>Y</b> will be built during the <b>i</b>-th day. </p>
<h3>Output</h3>
<p>Output <b>M</b> lines. The <b>i</b>-th line should contain the number of unsafe pairs of towns after the <b>i</b>-th day.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 10
6 7
1 10
8 4
9 7
10 4
5 7
1 3
5 2
6 1
8 6

<b>Output:</b>
1
2
3
5
9
12
16
20
45
35

</pre><h3>Scoring</h3>
<p>Subtask 1 (22 points): 1 &lt;= <b>N</b> &lt;= 5, 1 &lt;= <b>M</b> &lt;= 5.<br /><br />
Subtask 2 (13 points): 1 &lt;= <b>N</b> &lt;= 100, 1 &lt;= <b>M</b> &lt;= 100.<br /><br />
Subtask 3 (20 points): 1 &lt;= <b>N</b> &lt;= 5000, 1 &lt;= <b>M</b> &lt;= 5000.<br /><br />
Subtask 4 (45 points): 1 &lt;= <b>N</b> &lt;= 5*10<sup>5</sup>, 1 &lt;= <b>M</b> &lt;= 5*10<sup>5</sup>.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-07-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>