<?php require("../../includes/header.php"); ?><h1>Online Shopping</h1><div class="content">

<p>Alice likes to shop online. The main reason is that she gets a lot of discounts! There are <b>M</b> online shops from where she purchases her items. The prices of the same item vary in both the shops. She needs to buy <b>N</b> items in all. And each she can buy each item in any one of the shops. All the shops offer certain discounts. If she buys the <i>i</i><sup>th</sup> item in one shop, she gets a discount coupon for the <i>i+1</i><sup>th</sup> item in the same shop. But if she purchases the <i>i+1</i><sup>th</sup> item from a different shop, she cannot use the discount coupon.<br /> For example, if she buys the <i>i</i><sup>th</sup> item in Shop <i>j</i> and gets a discount of <i><b>X</b></i> rupees. Let the price of <i>i+1</i><sup>th</sup> item be <i><b>Y</b></i> rupees in shop <i>j</i> and <i><b>Z</b></i> rupees in shop <i>k</i>. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>j</i> she can use the discount coupon and hence, will have to pay <i><b>Y-X</b></i> rupees. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>k</i> she cannot use the discount coupon and hence, will have to pay <i><b>Z</b></i> rupees.</p>
<p> <b>Note:</b> If the discount given is more than price of the item in the shop, i.e. if <i><b>Y-X</b></i> &lt; 0, the item is given free but she does NOT get any money back.</p>
<p>Alice wants to spend as less as possible and wants your help. She starts buying from item 1 and goes on till item N in that order. Your task is simple. Tell her the least amount to spend to get all the <b>N</b> items.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.</p>
<p> Each test case starts with a line consisting of two space separated integers <b>N</b> &amp; <b>M</b>.<br /> The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the price of <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.</p>
<p> The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the value of discount coupon given after purchasing <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.</p>
<h3>Output:</h3>
<p>For each test case, output on a separate line the least amount that has to be spent to get all the <b>N</b> items.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N, M</b> ≤ 100000
0 ≤ Prices, Discounts ≤ 1000000
1 ≤ <b>T * N * M</b> ≤ 1000000

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>2
2 2
3 4
1 2
1 0
0 1
2 4
1 2 3 4
4 3 2 1
2 3 2 1
1 2 1 1


</pre><p><b>Output:</b></p>
<pre>3
2

</pre><h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for solving the problem correctly for <b>M = 2</b>.</p>
<p> Another <b>20</b> points for solving the problem correctly for <b>M &lt;= 100</b>.</p>
<p> Remaining <b>40</b> points will be awarded for solving the problem correctly for <b>M &gt; 100</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>