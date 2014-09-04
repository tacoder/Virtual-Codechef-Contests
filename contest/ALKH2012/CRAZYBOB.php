<?php require("../../includes/header.php"); ?><h1>Crazy Bob</h1><div class="content">

<p>
Crazy Bob came across a set of n transformers that are all faulty. Crazy bob decided to fix it in a crazy way. The n transformers are of 2 types. The first  kind can be fixed in a single attempt with probability A% and the second kind can be fixed in a single attempt with probability B%. You are given a string composed of characters 'A' and 'B' to denote which type of transformers each one is.</p>
<p>As always, Bob wants to show off his transformer fixing skills in a crazy way. While atleast one of the transformer is mal-functioning, he randomly chooses a set of k transformers and attempts to fix all of them. The transformers that are already working (in the set of chosen k) remain working. Of the chosen transformers that are still mal-functioning, the transformers that are of type A get fixed with probability A% and the transformers of type B get fixed with probability B%.  You are asked to find the expected number of steps Bob takes to fix all the transformers. One step is a selection of k random transformers from n.</p>
<h3>Input</h3>
<p>
The first line of the input consists of the number of testcases T (T&lt;=200).<br />
Each of the test case starts with 4 integers n, k, A, B which denote the number of transformers to be repaired, the number k crazy-bob chooses at each iteration. A and B are the probabilities in percent.<br />
Constraints:<br />
1&lt;=n&lt;=40,<br />
1&lt;=k&lt;=n,<br />
1&lt;=A&lt;=99,<br />
1&lt;=B&lt;=99, </p>
<h3>Output</h3>
<p>
Output one number for each line - the expected number of iterations crazy-bob needs to perform before all the transformers are repaired. Your answer will be considered correct if the absolute difference between your number and the correct number is &lt;10^(-6)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 1 99 99
AA
1 1 99 99
A
2 1 40 60
AB
2 1 100 100
AA

<b>Output:</b>
3.0303030303
1.0101010101
6.3333333333
3.0000000000

<b>Explanation:</b>
<p>
In the third test case, Bob randomly chooses one of the 
transformers (with 1/2 probability each) and fixes them. 
Thus he is left with fixing 1 transformer. Let x be the 
expected number of moves before he can fix the 1 
transformer.
So the answer is 1+x.
To calculate x, at the next step, he  randomly chooses any
 of the transformers (with 1/2 each). If he chooses the fixed
 transformer, he has wasted the move and is back to x. If 
he chooses the faulty one, he has fixed both the 
transformers. Hence x = 1+1/2(x) or x = 2.
The required answer is 1+x = 3.
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/balakrishnan_v">balakrishnan_v</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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