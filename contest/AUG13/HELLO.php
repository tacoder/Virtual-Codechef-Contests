<?php require("../../includes/header.php"); ?><h1>Hello Hello</h1><div class="content">
<p>Chef talks a lot on his mobile phone. As a result he exhausts his talk-value (in Rokdas) very quickly. One day at a mobile recharge shop, he noticed that his service provider gives add-on plans which can lower his calling rates (Rokdas/minute). One of the plans said "Recharge for 28 Rokdas and enjoy call rates of 0.50 Rokdas/min for one month". Chef was very pleased. His normal calling rate is 1 Rokda/min. And he talked for 200 minutes in last month, which costed him 200 Rokdas. If he had this plan activated, it would have costed him: 28 + 0.5*200 = 128 Rokdas only! Chef could have saved 72 Rokdas. But if he pays for this add-on and talks for very little in the coming month, he may end up saving nothing or even wasting money. Now, Chef is a simple guy and he doesn't worry much about future. He decides to choose the plan based upon his last month’s usage.</p>
<p>There are numerous plans. Some for 1 month, some for 15 months. Some reduce call rate to 0.75 Rokdas/min, some reduce it to 0.60 Rokdas/min. And of course each of them differ in their activation costs. <b>Note</b> - If a plan is valid for <b>M</b> months, then we must pay for (re)activation after every <b>M</b> months (once in M months). Naturally, Chef is confused, and you (as always) are given the task to help him choose the best plan.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>- the number of test cases. In each test case, first line contains <b>D</b>- the default rate (Rokdas/minute, real number), <b>U</b>- the number of minutes Chef talked in last month and <b>N</b>- the number of add-on plans available. Then <b>N</b> lines follow, each containing <b>M</b>- the number of months the plan is valid for, <b>R</b>- the calling rate for the plan (Rokdas/minute, real number) and <b>C</b>- the cost of the plan.</p>
<h3>Output</h3>
<p>For each test case, output one integer- the number of the best plan (from 1 to N). Output '0' if no plan is advantageous for Chef. No two plans are equally advantageous.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 100<br />0.5 ≤ <b>D</b> ≤ 10.0 (exactly 2 digits after the decimal point)<br />1 ≤ <b>U</b> ≤ 10000<br />1 ≤ <b>N</b> ≤ 100<br />1 ≤ <b>M</b> ≤ 36<br />0.05 ≤ <b>R</b> &lt; <b>D</b> (exactly 2 digits after the decimal point)<br />1 ≤ <b>C</b> ≤ 1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1.00 200 1
1 0.50 28
1.00 200 2
1 0.75 40
3 0.60 100
1.00 50 2
1 0.75 40
3 0.60 100
1.00 100 2
3 0.50 10
2 0.10 20

<b>Output:</b>
1
2
0
2
</pre><h3>Explanation</h3>
<p><b>Test Case 1:</b> This test case is same as the example in the problem statement.<br /><b>Test Case 2:</b> This is for you to work out!<br /><b>Test Case 3:</b> Chef's monthly usage is only 50 Rokdas and none of the 2 plans are advantageous, hence the answer is zero '0'.<br /><b>Test Case 4:</b> Again solve it yourself, but NOTE - if Chef had chosen plan 1, he would have to pay 10 Rokdas (Activation cost), after every 3 months and NOT every month. Similarly had he chosen plan 2, he would have to pay 20 Rokdas (Activation cost), after every 2 months.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2013</td>
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