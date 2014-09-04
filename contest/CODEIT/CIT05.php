<?php require("../../includes/header.php"); ?><h1>Factoring Challenge</h1><div class="content">

<p>The goal is to factor a given 127/128-bit integer N of the form N = P*Q, where P and Q are two 64 bit primes. It is well-known that factorization is a hard problem, and hence you are provided with partial information about the bit-pattern of the primes P and Q. In particular, you are given about 50% of the bits of both P and Q, at random. The goal is to factor N by reconstructing the missing bits of the primes.</p>
<h3>Input</h3>
<p>The first line specifies the number of test cases, followed by a blank line.</p>
<p>Each test case consists of the following:</p>
<p>N_hex = &lt; 32 HEX characters ><br />
P_bit = [&lt; 64 characters, separated by a comma and a white space >] <br />
Q_bit = [&lt; 64 characters, separated by a comma and a white space >] </p>
<p>The test cases are separated by blank lines as well.</p>
<p>Note: <br />
1. The 32 Hex characters in the first line specifies N, the number you have to factor. <br />
2. Each of the 64 characters in P_bit and Q_bit may either be 0, 1 or x. <br />
3. The known bits are 0 or 1 and are at random locations.<br />
4. The unknown bits are denoted by x.<br />
5. Ordering of hex characters: N = &lt; most significant hex > &lt; all other hex > &lt; least significant hex > <br />
6. Ordering of bits: P_bit = [ &lt; least significant bit > &lt; all other bits > &lt; most significant bit > ] </p>
<h3>Output</h3>
<p>Your output must contain the primes P and Q for each of the test cases, in HEX format, as specified below.</p>
<p>P_hex = &lt; 16 HEX characters > <br />
Q_hex = &lt; 16 HEX characters > </p>
<p>The different test case outputs should be separated by blank lines.</p>
<p>Note: <br />
1. All test cases MUST have an output each. <br />
2. Each of the outputs is UNIQUE as well.<br />
3. Ordering of hex characters: P_hex = &lt; most significant hex > &lt; all other hex > &lt; least significant hex > </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
The input file will contain everything within the dashed lines (including spaces, delimeters, and line breaks):

-------------------------------------------
5

N_hex = 8749d9be4bfd74973b31a79e247e765f
P_bit = [x, 1, 0, 1, x, x, 0, x, x, 1, 0, 0, 0, 1, x, 1, x, x, 0, x, 0, x, 1, x, x, 0, 1, 0, x, 0, 1, x, x, 1, x, x, 0, x, 1, x, 0, x, 1, x, x, 0, 0, x, x, x, 0, 1, x, x, 1, 0, x, 0, x, x, x, 0, x, x]
Q_bit = [1, x, 1, x, 1, 1, x, x, x, x, x, 1, x, 0, 1, x, x, x, 0, x, 0, 0, x, 0, x, x, 1, x, x, x, 1, x, x, 1, 0, x, x, 0, x, x, 0, x, x, x, x, x, x, x, 1, 0, x, 0, x, 1, 1, x, 0, x, 1, 1, 0, x, 1, 1]

N_hex = 806e763db47bbb6295171b44776c71c3
P_bit = [x, 0, 0, 0, x, 0, 0, 0, x, 1, 1, x, x, x, x, x, x, 1, x, 1, 1, x, 0, 1, x, 1, 0, 0, 1, 1, x, x, 0, 0, 1, x, 0, x, 0, 0, x, x, x, 1, x, 1, 0, 0, x, 0, x, x, x, 1, 0, 1, x, x, 1, x, x, x, x, 1]
Q_bit = [1, x, 0, 0, 1, 0, 0, 1, x, x, x, 1, x, x, x, x, x, x, x, x, 1, 1, x, x, x, x, x, x, 1, 1, 1, x, 1, x, x, 0, 0, x, x, x, x, 1, 1, 0, x, 0, 1, 0, x, 1, x, 1, 0, 1, 0, 1, x, x, 0, x, 1, 0, 1, 1]

N_hex = 7593211d38b631a6c140b6983e40016b
P_bit = [x, x, 0, 0, 1, 1, 1, x, x, x, 1, x, x, 0, 0, x, 0, x, x, 0, x, 1, 0, 0, 1, x, x, x, x, 0, 0, x, 1, x, 1, x, 0, 1, 0, x, x, x, 1, 1, x, 1, 1, x, 1, 0, 1, 1, 1, 1, 0, x, 1, x, 0, 0, 1, x, x, 1]
Q_bit = [x, x, x, x, x, 0, x, 1, 0, 0, 0, x, 0, 0, 0, x, 1, x, 1, 0, x, x, x, x, 0, 1, 1, 0, x, x, x, x, 0, 0, 0, 0, x, x, x, x, 0, 0, x, x, 1, 1, 0, 1, 0, x, 1, x, 1, x, x, 0, 1, x, x, 1, 0, 0, x, x]

N_hex = 87dd37c7451f77336d5926253ee3560f
P_bit = [1, x, x, x, 1, x, 0, 1, x, 0, 1, x, 1, 1, x, 1, 0, x, 1, x, x, x, x, 1, x, 0, 1, x, x, x, 0, 1, 0, x, x, x, x, 1, 0, x, 0, x, x, 1, x, x, x, 1, 1, x, x, x, x, x, 1, 0, x, x, x, 1, x, x, 0, 1]
Q_bit = [1, x, 1, x, x, x, 0, 1, x, 1, x, x, 1, x, x, x, 0, x, 1, 0, x, 1, x, x, 0, 1, x, x, 0, 0, x, x, x, 1, x, x, x, 1, x, x, 0, 1, 0, x, 0, x, 1, 1, 0, 0, x, 0, x, x, x, x, 0, x, x, 1, x, 1, 1, x]

N_hex = 4f743382568e0e15dc2ab5d520763a13
P_bit = [1, x, 0, x, x, x, x, 0, 0, 1, 1, x, 1, x, 1, x, 0, 0, x, 0, x, 0, x, 0, x, 1, x, x, x, 1, x, x, x, 1, 1, 1, 1, 1, 1, x, x, x, x, 1, x, 0, 1, x, x, 0, x, 0, 1, 1, x, x, x, 0, 0, 0, 0, 0, x, x]
Q_bit = [1, x, x, 1, x, 0, 1, 1, x, x, x, 1, x, x, 0, 1, x, x, 1, 1, x, x, 1, x, 1, 0, x, 0, x, 0, x, 0, 0, 1, x, 1, x, 1, 1, 1, x, x, x, 1, 0, x, 1, x, 0, 0, 1, 1, x, 0, x, 0, x, 1, 1, 1, 1, x, 0, 1]

-------------------------------------------

<b>Output:</b>
The output file should contain everything within the dashed lines (including spaces, delimeters, and line breaks):

-------------------------------------------
P_hex = 914986cbd440a28b
Q_hex = ee61c81aed42d9fd

P_hex = 95ac2c04329b2f11
Q_hex = dbab56837bffbb93

P_hex = 913d6da795340771
Q_hex = cf3cbcb016f7809b

P_hex = 897fbc22ade6b5b1
Q_hex = fcf4caa206b4f7bf

P_hex = 80b1d87e3f147629
Q_hex = 9e0ccdfe554e9ddb

-------------------------------------------

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bst0602">bst0602</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-01-2011</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>