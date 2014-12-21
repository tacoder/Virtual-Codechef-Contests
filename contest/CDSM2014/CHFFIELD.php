<?php require("../../includes/header.php"); ?><h1>The Chef and the field</h1><div class="content">
<p>The Chef and his brother own a rectangular field.<br /><br /><br />
 Chef’s brother wants to sell the field. He calls the Chef one day and says that if any dimension of the field is a prime number, he will sell the field. He tells him that he will measure the exact dimensions the next morning. The Chef does not want to sell the field. He knows that his brother is adamant and there is no way that he will change his mind.  So, he comes up with a plan to save some part of the field. He decides to measure the dimensions of the field in the night. If any dimension was a prime number he would reduce that dimension to the closest non prime number. Now, when the brother will measure the field in the morning, he cannot sell it. Print the area of the reduced field.<br /><br /><br />
You need to perform the above task for a number of test cases. <br /><br /><br />
NOTE: If the dimension cannot be reduced to non prime number, then reduce it to 1.<br />
</p>
<h3>Input</h3>
<p>The first line of input contains the number of test cases, t.<br />
Then t lines follow, each containing 2 positive integers, L and B, the dimensions of the field.</p>
<h3>Output</h3>
<p>The output contains t lines, each for each test case.<br /><br />
For each test case, print a single integer, the area of the resultant field.</p>
<h3>Constraints</h3>
<p>1&lt;=t&lt;=10000<br /><br />
1&lt;= L,B &lt;=1000000</p>
<h3>Example</h3>
<p><b>Input:</b><br />
4<br />
4 10<br />
2 2<br />
13 14<br />
16 18</p>
<p><b>Output:</b><br />
40<br />
1<br />
168<br />
288</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pratku123">pratku123</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/wittyceaser">wittyceaser</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>