<?php require("../../includes/header.php"); ?><h1>Knapsack Problem</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK47/mandarin2/KNPSK.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK47/russian/KNPSK.pdf" target="_blank">Russian</a> as well.</h3>
<p>Mike takes part in programming contests. His favourite topic is dynamic programming(DP). As he said, that he likes problems on DP, because "you spend a lot of time on thinking and a little time on coding".</p>
<p>In this problem you are to solve a version of the knapsack problem(<a href="http://en.wikipedia.org/wiki/Knapsack_problem">link</a>), one of the most famous examples of DP problem.</p>
<p>You are given <b>N</b> items, each has two parameters: a weight and a cost. Let's define <b>M</b> as the sum of the weights of all the items.</p>
<p>Your task is to determine the most expensive cost of a knapsack, which capacity equals to 1, 2, ..., <b>M</b>. A cost of a knapsack equals to the sum of the costs of all the elements of the knapsack. Also, when you have a knapsack with a capacity is equal to <b>C</b>, then you can fill it with items, whose sum of weights is not greater than <b>C</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains one integer <b>N</b>, denoting the number of the items.</p>
<p>The next <b>N</b> lines contain two integers <b>W</b> and <b>C</b> each, denoting the weight and the cost of the corresponding item.</p>
<h3>Output</h3>
<p>For each capacity <b>C</b> (<b>1 ≤ C ≤ M</b>) of the knapsack, output a single integer - the most expensive cost for that capacity.</p>
<h3>Constraints</h3>
<p>3 ≤ <b>N</b> ≤ 100000;</p>
<p>1 ≤ <b>W</b> ≤ 2, for each item;</p>
<p>1 ≤ <b>C</b> ≤ 10<sup>9</sup>, for each item.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 1
2 2
2 3
2 4
2 5

<b>Output:</b>
1 5 6 9 10 12 13 14 15 
</pre>
<h3>Explanations</h3>
<p>In the test case, <b>M</b> equals to 9.<br /><br /> For <b>C</b> = 1, it's optimal to choose {1} items;<br /><br /> For <b>C</b> = 2, it's optimal to choose {5} items;<br /><br /> For <b>C</b> = 3, it's optimal to choose {1, 5} items;<br /><br /> For <b>C</b> = 4, it's optimal to choose {4, 5} items;<br /><br /> For <b>C</b> = 5, it's optimal to choose {1, 4, 5} items;<br /><br /> For <b>C</b> = 6, it's optimal to choose {3, 4, 5} items;<br /><br /> For <b>C</b> = 7, it's optimal to choose {1, 3, 4, 5} items;<br /><br /> For <b>C</b> = 8, it's optimal to choose {2, 3, 4, 5} items;<br /><br /> For <b>C</b> = 9, it's optimal to choose {1, 2, 3, 4, 5} items.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2014</td>
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