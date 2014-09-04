<?php require("../../includes/header.php"); ?><h1>Modular Enigma</h1><div class="content">

<p style="text-align:justify;">
Alice and Bob are a paranoic couple who wants to hold a remote conversation using a chat client. However, they do not like the existent ones (e.g. gtalk, MSN, Facebook chat, etc.), as they think that there might be hidden backdoors in them that allows spies to read their conversations about their never ending love.</p>
<p style="text-align:justify;">
Last week, they decided to build their unique chat client, called ABmod, which will encode their messages using a symmetric approach. First, Alice and Bob will choose a public prime integer P and exchange a private key composed of two integers A and B, here 0 &lt;= A,B &lt; P. <br />To encode a message X they will apply the following function: </p>
<p><b>f(X) = (A x X + B) mod P</b></p>
<p style="text-align:justify;">
where C mod M is the remainder of dividing C between M. This operator satisfy the following properties (among others not mentioned here):</p>
<ul>
<li>(A + B) mod M = ((A mod M) + (B mod M)) mod M</li>
<li>(A x B) mod M = ((A mod M) x (B mod M)) mod M</li>
</ul>
<p style="text-align:justify;"><br /><br />
Eve is in a crush for Bob and wants to spy and interfere his conversation with Alice. To do this, Eve managed to intercept N messages in their plain and encoded forms. Now, she wants<br />
to deduce the private key (A,B) to send fake encoded messages to Alice pretending she is Bob. However, she has no idea of how to do it, so she is asking for your help in this task.</p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains an integer T, which specifies the number of test cases. Then, T test case descriptions will follow.</p>
<p style="text-align:justify;">
Each test case will start with a line with two positive integers, N and P, whose meanings were described previously. The next N lines will contain each 2 integers X<sub>i</sub> and Y<sub>i</sub>, which represents an intercepted message whose plain form is X<sub>i</sub> and encoded form is Y<sub>i</sub>.</p>
<h3>Output</h3>
<p style="text-align:justify;">
For each input case you must print the string "Case #i: ", where i is the test case number, starting from 1, followed by the number A and B that compose the private key. If there multiple valid keys, print "MULTIPLE SOLUTIONS" instead. If there are no valid keys, print<br />
"NO SOLUTIONS" instead.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
4
2 5
3 0
1 4
1 13
0 12
2 2
0 0
0 1
4 97
0 13
1 46
2 79
3 15

<b>Output</b>
Case #1: 3 1
Case #2: MULTIPLE SOLUTIONS
Case #3: NO SOLUTIONS
Case #4: 33 13
</pre><h3>Constraints</h3>
<p style="text-align:justify;">
<ul>
<li>T will be between 1 and 1000, inclusive.</li>
<li>P will be a prime number.</li>
<li>P will be between 2 and 10<sup>6</sup>, inclusive.</li>
<li>N will be between 1 and 100, inclusive.</li>
<li>X<sub>i</sub> and Y<sub>i</sub> will be between 0 and P-1, inclusive, for all i between 1 and N, inclusive.</li>
</ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>