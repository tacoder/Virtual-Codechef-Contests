<?php require("../../includes/header.php"); ?><h1>Randomly Testing Circuits</h1><div class="content">

<p> AND gates and OR gates are basic components used in building digital circuits. Both gates have two input lines and one output line. The output of an AND gate is 1 if both inputs are 1, otherwise the output is 0. The output of an OR gate is 1 if at least one input is 1, otherwise the output is 0.</p>
<p>
You are given a digital circuit composed of only AND and OR gates where one node (gate or input) is specially designated as the output. Furthermore, for any gate G and any input node I, at most one of the inputs to G depends on the value of node I.</p>
<p>
Now consider the following random experiment. Fix some probability p in [0,1] and set each input bit to 1 independently at random with probability p (and to 0 with probability 1-p). The output is then 1 with some probability that depends on p. You wonder what value of p causes the circuit to output a 1 with probability 1/2.</p>
<h3>Input</h3>

<p>
The first line indicates the number of test cases to follow (about 100).</p>
<p>
Each test case begins with a single line containing a single integer n with 1 ≤ n ≤ 100 indicating the number of nodes (inputs and gates) in the circuit. Following this, n lines follow where the i'th line describes the i'th node. If the node is an input, the line simply consists of the integer 0. Otherwise, if the node is an OR gate then the line begins with a 1 and if the node is an AND gate then the line begins with a 2. In either case, two more integers a,b follow, both less than i, which indicate that the outputs from both a and b are used as the two input to gate i.</p>
<p>
As stated before, the circuit will be such that no gate has both of its inputs depending on the value of a common input node.</p>
<p>
Test cases are separated by a blank line including a blank line preceding the first test case.</p>
<h3>Output</h3>

<p>
For each test case you are to output a single line containing the value p for which the output of node n is 1 with probability exactly 1/2 if the inputs are independently and randomly set to value 1 with probability p. The value p should be printed with exactly 5 digits after the decimal.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

4

1
0

3
0
0
1 1 2

3
0
0
2 1 2

5
0
0
0
2 1 2
1 3 4

<b>Output:</b>

0.50000
0.29289
0.70711
0.40303
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>