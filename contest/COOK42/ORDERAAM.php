<?php require("../../includes/header.php"); ?><h1>Chef and the Orders</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/ORDERAAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/ORDERAAM.pdf">Russian</a> as well.</h3>
<p>Chef gets <b>N</b> orders. The orders are numbered from <b>1</b> to <b>N</b>. He gets order <b>i</b> at <b>S<sub>i</sub></b> time, and this order contains <b>X<sub>i</sub></b> number of items. Chef needs to serve each of these <b>X<sub>i</sub></b> items before <b>D<sub>i</sub></b> time and for each unit of items he cannot cook before this deadline he needs to pay <b>P<sub>i</sub></b> unit of money as penalty. Given all of the orders, help the Chef to minimize the penalty he will have to pay. <br /><br /> <b>Important Note</b>: Chef can cook at most one item at a unit time and for each item he needs exactly one unit of time to cook. Also Chef can serve an item instantly, when the item is cooked. If Chef wants to serve an item at time <b>t</b>, then the latest he can cook that item is at time time <b>t</b>. In another words, for order <b>i</b> Chef can cook the items at time units <b>S<sub>i</sub></b>, <b>S<sub>i</sub>+1</b>, <b>S<sub>i</sub>+2</b>, ..., <b>D<sub>i</sub>-1</b>. Please note, that Chef can not cook items from order <b>i</b> exactly at time unit <b>D<sub>i</sub></b>. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case starts with a line containing <b>N</b> the number of orders. Each of the next <b>N</b> lines contains the description of an order. Order <b>i</b> is given as a four integers <b>S<sub>i</sub></b>, <b>X<sub>i</sub></b>, <b>D<sub>i</sub></b> and <b>P<sub>i</sub></b> in a single line separated by a single space. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum amount of penalty Chef has to pay. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>S<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>D<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>S<sub>i</sub></b>+<b>X<sub>i</sub></b> ≤ <b>D<sub>i</sub></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
1 5 6 10
2
1 5 6 10
1 5 6 10
2
1 5 6 1
1 5 6 10
2
1 5 6 10
6 5 11 10
4
5 8 15 20
11 8 20 21
16 8 25 22
21 8 30 23

<b>Output:</b>
0
50
5
0
147

</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example 1:</b> There is only 1 order and all of the items from this order can be served. So zero penalty</p>
<p><b>Example 2:</b> There are two orders and you cannot serve 5 items. You can select these 5 items from any order.</p>
<p><b>Example 3:</b> There are two orders and you cannot serve 5 items. But it is better not to serve these 5 items from the first order.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-01-2014</td>
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