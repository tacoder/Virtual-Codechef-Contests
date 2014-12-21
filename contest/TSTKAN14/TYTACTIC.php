<?php require("../../includes/header.php"); ?><h1>Tywins Tactics</h1><div class="content">

<p>
Tywin Lannister is a tactical genius. At the heart of his tactical skills, is the way he has organized his armies, and the way he is able to estimate his soldiers' skill-levels, thus helping him make crucial decisions as to whom to dispatch to which areas of the war.
</p>
<p>
His army is organized in the form of a hierarchy - indeed it is a tree, with him as the root. We say "<b>A has immediate superior B</b>" if <b>A</b> reports directly to <b>B</b>. We further say "<b>A has superior B</b>" if there is a chain of soldiers starting with <b>A</b>, ending with <b>B</b>, and where each soldier reports directly to the next soldier of the chain. Further, each soldier is assigned an initial <b>skill-level</b> based on prior experience and battle proficiency.
</p>
<p>
In order for Tywin to decide whom to send to which battle, he has the following scheme: He chooses a particular soldier <b>S</b> as the leader of his temporary 'regiment', and sends in to battle, <b>S</b> as well as all the soldiers that have <b>S</b> as one of their superiors. He estimates the skill level of the regiment as the total skill level of all the soldiers under <b>S</b> (denoted by query "<b>Q S</b>").
</p>
<p>
After a battle, he may want to update the skill levels of some soldiers. If he wants to update the skill level of soldier <b>S</b> to value <b>x</b>, it is denoted by the query "<b>U S x</b>".
</p>
<p>
You are given the structure of the army, whose size is <b>N</b>, the initial skill levels of all the individual soldiers, as well the number of queries <b>M</b>. For each query of the type "<b>Q S</b>", report the sum of skill-levels of all the soldiers who have <b>S</b> as their superior.
</p>
<p>
<b>Note:</b> The soldiers are numbered 1 to <b>N</b>, and Tywin is given the number <b>1</b>.
</p>
<h3>Input</h3>
<p>
The first line consists of the integers <b>N</b> and <b>M</b>, denoting the number of soldiers and the number of queries.</p>
<p>This is followed by a single line consisting of <b>N</b> nonnegative values - the <b>skill levels of the N soldiers</b>.</p>
<p>This is then followed by <b>N-1</b> lines consisting of pairs of integers <b>(u, v)</b>, denoting that either <b>u is an immediate superior of v, or vice-versa</b>.</p>
<p>Finally you are given the <b>M</b> queries, of either the form "<b>U S x</b>" or "<b>Q S</b>".</p>
<h3>Output</h3>
<p>
For each "<b>Q S</b>" query, output the sum of skill values of all the soldiers under <b>S</b>.
</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b> </li>
<li> All skill values given with be in the range [<b>0</b>, <b>20,000</b>] </li>
<li> <b>1</b> ≤ <b>S</b> ≤ <b>N</b> for all queries </li>
<li> All soldiers will have soldier <b>1</b> (Tywin) as their superior </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 8
7 2 0 5 8
1 2
2 3
2 4
1 5
Q 1
Q 2
U 2 4
Q 1
Q 2
U 5 3
Q 1
Q 2

<b>Output:</b>
22
7
24
9
19
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pragrame">pragrame</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2013</td>
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