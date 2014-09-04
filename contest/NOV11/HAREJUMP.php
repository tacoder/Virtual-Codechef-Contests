<?php require("../../includes/header.php"); ?><h1>Chefs new Pet</h1><div class="content">

<p>The chef got a new rabbit and he is going to train him so that he can perform for him whenever he needs entertainment. The chef teaches k types of jumps to the rabbit. Each jump has definite length L units. The rabbit does not have any brains he will use any type of jump he feels like at any point of time. He is placed on a very long mat and starts at 0 unit. The chef wants to know in how many ways he can perform his jumps and cover exactly N units of distance.</p>
<h3>Input</h3>

<p>The first line contains the number of the test cases T(&lt;=100). Each test case consists of 2 lines. The first line defines the distance N (1&lt;=N&lt;=10^18) which tells us the number of units the chef wants the rabbit to cover. The next line contains k the number of jumps which are taught to the rabbit, k (k&lt;=15) integers follow in the same line each denoting distinct distance L (L&lt;=15) units which can be jumped by the rabbit.</p>
<h3>Output</h3>

<p>Print T integers each denoting the number of ways the rabbit can perform jumps of N units of distance. Print the remainder obtained on dividing the answer by 1000000007 if the answer is greater than or equal to 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
10
1 1
13
3 1 2 8
15
5 1 2 3 4 5



<b>Output:</b>
1
415
13624
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/calc_saransh">calc_saransh</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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