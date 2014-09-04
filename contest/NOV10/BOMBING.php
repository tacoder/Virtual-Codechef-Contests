<?php require("../../includes/header.php"); ?><h1>Bombing</h1><div class="content">

<p>There are n+1 (0 &lt; n &lt;= 10<sup>9</sup>, indexed 0..n) houses lying on a straight street. One day, they are bombed by an enemy. CodeChef is designing defence systems to protect the street from bombing. Each defense system can protect all houses in some interval, and a house can be protected by more than one system. A defence system can be also moved at any time. By agents, CodeChef knows the bombing schedule of the enemy. Each time they bomb a house and CodeChef wants to know how many systems are protecting that house.</p>
<h3>Input</h3>
<ul>
<li>The first line contains two integers n, m (0 &lt; m &lt;= 250 000).</li>
<li>Each of the m following lines follows one of these:
<ul>
<li>P u v: CodeChef adds a defence system protecting all houses from the u-th house to the v-th house (0 &lt;= u &lt;= v &lt;= n). All systems will be indexed by order of appearance in the input, starting from 1.</li>
<li>M i d: CodeChef moves the i-th system by d houses, d &lt; 0 means moving nearer the 0-th house, and d &gt; 0 means moving away (that is, if the i-th system covers houses u through v, it is moved to instead cover houses w=u+d through t=v+d). After being moved the system will protect from the w-th house to t-th house where 0 &lt;= w &lt;= t &lt;= n.</li>
<li>B x: The enemy bombs the x-th house.</li>
</ul>
</li>
</ul>
<h3>Output</h3>
<p>For each time of bombing by the enemy (by the appearance in the input), output on a single line a number of systems protecting that house.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7 5
P 1 4
P 3 5
B 3
M 2 1
B 3

<b>Output:</b>
2
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>