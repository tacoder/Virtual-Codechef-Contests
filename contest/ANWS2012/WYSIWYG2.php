<?php require("../../includes/header.php"); ?><h1>Circular Permutations</h1><div class="content">

<p>2^N binary digits can be placed in a circle so that all the N-digit clockwise subsequences are distinct.<br />
For N=3, two such circular arrangements are possible, ignoring rotations:</p>
<pre>
                 0                      
           1          0
          1             0
            1        1
                 0

                 0                      
           1          0
          0             0
            1        1
                 1

</pre><p>For the first arrangement, the 3-digit subsequences, in clockwise order, are: 000, 001, 010, 101, 011, 111, 110 and 100.<br />
Each circular arrangement can be encoded as a number by concatenating the binary digits starting with the subsequence of all zeros as the most significant bits and proceeding clockwise. The two arrangements for N=3 are thus represented as 23 and 29:<br />
00010111 2 = 23<br />
00011101 2 = 29<br />
Calling S(N) the sum of the unique numeric representations, we can see that S(3) = 23 + 29 = 52.<br />
Your job is to write a program to evaluate S(N).</p>
<h3>Input</h3>
<p>The value for N.</p>
<h3>Output</h3>
<p>Evaluated value of S(N).</p>
<h3>Example</h3>
<pre>
<b>Input:
3</b>

<b>Output:
52</b>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankit_tripathi">ankit_tripathi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 25 sec</td>
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