<?php require("../../includes/header.php"); ?><h1>The Probability Of Winning</h1><div class="content">
<p>Chef, Artem and Eugene are the best of friends and teammates. Recently, they won a lot of money at the Are You Feeling Lucky Cup. Having put their fortune to test and emerging victorious, they are now busy enjoying their wealth. Eugene wanted to drink it all away. Chef and Artem had better plans. </p>
<p>Chef and Artem decided to go to Las Vegas and put more of their fortune to test! Eugene stayed at home and continues drinking.</p>
<p>
In Vegas, Chef and Artem found lots of interesting games. The most interesting one to them was the game of Lucky Tickets.
</p>
<p>Lucky Tickets is played using <strong>three</strong> kinds of tickets</p>
<p>
<ul>
<li><strong>Type-1</strong> called the winning ticket.</li>
<li><strong>Type-2</strong> called the losing ticket.</li>
<li><strong>Type-3</strong> called the try again ticket.</li>
</ul>
</p>
<p><strong>Lucky Tickets</strong> is played as follows</p>
<p>You know there are <strong>T1</strong> tickets of <strong>Type-1</strong>, <strong>T2</strong> tickets of <strong>Type 2</strong> and <strong>T3</strong> tickets of <strong>Type-3</strong> before the game begins.</p>
<p>All the tickets are placed in a sealed box. You are allowed to take out only one ticket from the box. Of course, you cannot see inside the box while choosing the ticket.</p>
<p>
<ul>
<li>If you choose a <strong>Type-1</strong> ticket, you are declared winner of Lucky Tickets and double your money.</li>
<li>If you choose a <strong>Type-2</strong> ticket, you are declared loser of Lucky Tickets and lose all your money.</li>
<li>If you choose a <strong>Type-3</strong> ticket, you have to try your fortune again and pick another ticket from the box and the selection process starts all over again.</li>
</ul>
</p>
<p>Chef was able to convince the organizers of Lucky Tickets to let him go first and discard <strong>T4</strong> tickets. This means that Chef makes <strong>T4</strong> turns to choose exactly one ticket every turn, and despite what ticket he chose, he simply discards it. Chef also convinced the organizers to let Artem go right after he is finished.</p>
<p>What is the probability that Artem will win?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each test case will consist of four space separeted integers <strong>T1, T2, T3 and T4</strong>, respectively.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the probability that Artem will win. Your answer will be considered correct if it has an absolute error less then <strong>10<sup>-6</sup></strong>.</p>
<h3>Constraints</h3>
<p><strong>1 ≤ T ≤ 10000</strong><br />
<strong>1 ≤ T1, T2, T3 ≤ 1000000000</strong><br />
<strong>0 ≤ T4 &lt; T1 + T2</strong></p>
<h3>Sample</h3>
<pre>
<strong>Input</strong>
2
2 2 1 2
2 3 4 1

<strong>Output</strong>
0.5
0.4

</pre><h3>Explanation</h3>
<p><strong>In the first test case</strong>, the <strong>5</strong> possible outcomes after Chef discards 2 tickets is</p>
<p>
<ul>
<li><strong>(0,2,1)</strong> with probability <strong>(1/10)</strong>. Probability of winning is <strong>0</strong> - since there are no winning tickets!</li>
<li><strong>(2,0,1)</strong> with probability <strong>(1/10)</strong>. Probability of winning is <strong>1</strong> - since there are no losing tickets!</li>
<li><strong>(2,1,0)</strong> with probability <strong>(1/5)</strong>. Probability of winning is <strong>(2/3)</strong> - there are no second chances!</li>
<li><strong>(1,2,0)</strong> with probability <strong>(1/5)</strong>. Probability of winning is <strong>(1/3)</strong> - there are no second chances!</li>
<li><strong>(1,1,1)</strong> with probability <strong>(2/5)</strong>. Probability of winning is <strong>(1/3) + (1/3)*(1/2) = (1/2)</strong>. This is calculated by considering the two cases
<ul>
<li>The winning ticket is picked in the first turn - probability <strong>(1/3)</strong>.</li>
<li>A <strong>Type-3</strong> ticket is picked in first turn, followed by the winning ticket - probability <strong>(1/3)*(1/2)</strong>.</li>
</ul>
</li>
</ul>
</p>
<p>The over-all probability of winning is <strong>(1/10) + (2/15) + (1/15) + (1/5) = (1/2)</strong>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-04-2013</td>
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