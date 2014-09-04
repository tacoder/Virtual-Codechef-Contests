<?php require("../../includes/header.php"); ?><h1>Fibonacci Returns</h1><div class="content">
<p>Santa and Banta are buddies. Santa has a good sense of humour, but Banta is unable to or partially understands some jokes.<br /><br /><br />
Now Santa has with him <strong>N</strong> jokes he wishes to tell to Banta. Due to lack of time, he cannot tell all of them and has to choose <strong>R</strong> jokes for Banta. The total value of all the jokes he tells Banta is <a href="http://en.wikipedia.org/wiki/Fibonacci_number">Fibonacci</a> ( <sup>N</sup> <a href="http://en.wikipedia.org/wiki/Combination">C</a> <sub>R</sub> ).<br /><br /><br />
Note that, Fibonacci(1)=Fibonacci(2)=1 and <br /><br />
Fibonacci(n)=Fibonacci(n-1)+Fibonacci(n-2) for n &gt; 2.<br /><br /><br />
However, Banta is unable to comprehend all the jokes. The value of jokes he understands is the total value of all jokes Santa tells Banta modulus some value <strong>M</strong>.<br /><br /><br />
Given <strong>N</strong>, <strong>R</strong> and <strong>M</strong>, your job is to compute the value of jokes Banta understands.<br /></p>
<h3>Input Format</h3>
<p>First line contains <strong>T</strong> ,number of test cases to follow.<br /><br />
Next <strong>T</strong> lines follows, each line containing 3 space separated integers, <strong>N</strong>, <strong>R</strong> and <strong>M</strong>.<br /></p>
<h3>Output Format</h3>
<p>The output contains <strong>T</strong> lines, each having the value of jokes Banta understands.<br /></p>
<h3>Constraints</h3>
<ul>
<li>0 ≤ N,R ≤ 10<sup>5</sup></li>
<li>1 ≤ M ≤ 10<sup>7</sup></li>
<li>Sum of N over all test cases ≤ 10<sup>5</sup></li>
</ul>
<h3>Sample Input</h3>
<p>3<br /><br />
2 2 100<br /><br />
2 1 100<br /><br />
3 1 100<br /></p>
<h3>Sample Output</h3>
<p>1<br /><br />
1<br /><br />
2<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>