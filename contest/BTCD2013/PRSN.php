<?php require("../../includes/header.php"); ?><h1>Monkeys</h1><div class="content">
<p> </p>
<p>At Area-51, USA, there is an advanced biological laboratory with compartments (numbered 1 to M) forming a straight line segment. There are genetically modified monkeys present in the lab, which can communicate with each other as humans do. Compartments number i and i+1 are adjacent, and monkeys in adjacent compartments are called "neighbours." A wall with a window separates adjacent compartments, and neighbours can communicate through that window.<br />
<br /><br />
All monkeys live in peace until a monkey is released. When that happens, the released monkey's neighbours find out, and each communicates this to his other neighbour in their own language. That monkey passes it on to his other neighbour, and so on until they reach a monkey with no other neighbour (because he is in cell 1, or in cell M, or the other adjacent cell is empty). A monkey who discovers that another monkey has been released will angrily break everything in his cell, unless he is bribed with a banana. So, after releasing a monkey in cell A, all monkeys housed on either side of cell A - until cell 1, cell M or an empty cell - need to be bribed.<br />
<br /><br />
Assume that each compartment is initially occupied by exactly one monkey, and that only one monkey can be released per day. Given the list of Z monkeys to be released in Z days, find the minimum total number of bananas needed as bribes if the monkeys may be released in any order.<br />
<br /><br />
Note that each bribe only has an effect for one day. If a monkey who was bribed yesterday finds out about another released monkey today, then he needs to be bribed again.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input gives the number of cases, N. N test cases follow. Each case consists of 2 lines. The first line is as:<br /><br />
M Z<br /><br />
where M is the number of compartments and Z is the number of monkeys to be released.<br />
This will be followed by a line with Z distinct cell numbers (of the monkeys to be released), sorted in ascending order and space separated.
</p>
<h3>Output</h3>
<p>For each test case, output a line with the minimum number of bananas needed as bribes.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>Z</b> ≤ <b>100</b></li>
<li><b>Z</b> ≤ <b>M</b> </li>
<li><b>Each cell number is between 1 and M, inclusive.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
8 1
3
20 3
3 6 14
<b>Output:</b>
7
35
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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