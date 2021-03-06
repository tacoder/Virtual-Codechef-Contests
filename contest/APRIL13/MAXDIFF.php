<?php require("../../includes/header.php"); ?><h1>Maximum Weight Difference</h1><div class="content">

<p>Chef has gone shopping with his 5-year old son. They have bought <b>N</b> items so far. The items are numbered from <b>1</b> to <b>N</b>, and the item <b>i</b> weighs <b>W<sub>i</sub></b> grams.</p>
<p>Chef's son insists on helping his father in carrying the items. He wants his dad to give him a few items. Chef does not want to burden his son. But he won't stop bothering him unless he is given a few items to carry. So Chef decides to give him some items. Obviously, Chef wants to give the kid less weight to carry.</p>
<p>However, his son is a smart kid. To avoid being given the bare minimum weight to carry, he suggests that the items are split into two groups, and one group contains exactly <b>K</b> items. Then Chef will carry the heavier group, and his son will carry the other group.</p>
<p>Help the Chef in deciding which items should the son take. Your task will be simple. Tell the Chef the maximum possible difference between the weight carried by him and the weight carried by the kid.</p>
<h3>Input:</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. The first line of each test contains two space-separated integers <b>N</b> and <b>K</b>. The next line contains <b>N</b> space-separated integers <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b>.</p>
<h3>Output:</h3>
<p>For each test case, output the maximum possible difference between the weights carried by both in grams.</p>
<h3>Constraints:</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ K &lt; N ≤ 100</b></li>
<li><b>1 ≤ W<sub>i</sub> ≤ 100000 (10<sup>5</sup>)</b></li>
</ul>
<h3>Example:</h3>
<pre><b>Input:</b>
2
5 2
8 4 5 2 10
8 3
1 1 1 1 1 1 1 1

<b>Output:</b>
17
2
</pre><h3>Explanation:</h3>
<p><b>Case #1:</b> The optimal way is that Chef gives his son <b>K=2</b> items with weights <b>2</b> and <b>4</b>. Chef carries the rest of the items himself. Thus the difference is: <b>(8+5+10) − (4+2) = 23 − 6 = 17</b>.</p>
<p><b>Case #2:</b> Chef gives his son <b>3</b> items and he carries <b>5</b> items himself.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2013</td>
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