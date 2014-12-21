<?php require("../../includes/header.php"); ?><h1>Party Mystery</h1><div class="content">
<p> </p>
<p>It's Tejasi's birthday and her mom has prepared hot dogs. There are N hot dogs and M people and her mom wants to divide the hotdogs equally. Tejasi wants to calulate the minimum number of cuts required to distribute the hot dogs equally.<br />
Help Tejasi in finding out the number of cuts required.
</p>
<p>
In order to divide the hot dogs, the number of cuts splitting individual hot dogs must be as small as possible.
</p>
<p>
Help her calculate the minimum total number of cuts needed to carry out the desired division.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains T the no of test cases.</p>
<p>The next t lines contain two positive integers, N and M , the number of hot dogs and eaters, respectively.</p>
<p> </p>
<h3>Output</h3>
<p>The output consists of t lines which contains required minimum number of cuts.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 6
3 4 
6 2 

<b>Output:</b>
4
3
0

</pre><p> </p>
<h3>Explanation</h3>
<p>If there are two hot dogs and six tasters, it is<br />
sufficient to split each hot dogs into three equal parts, making a total of four cuts.<br /> On the other hand, if there are three hot dogs and four tasters , one possibility is cutting off three quarters of each hot dogs. Those larger parts will each go to one of the tasters, while the fourth taster<br />
will get the three smaller pieces (quarters) left over.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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