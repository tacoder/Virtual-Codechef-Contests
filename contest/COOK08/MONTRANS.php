<?php require("../../includes/header.php"); ?><h1>Money Transformation</h1><div class="content">

<p>
You are standing near a very strange machine. If you put <b>C</b> cents in the machine, the remaining money in your purse will transform in an unusual way. If you have <b>A</b> dollars and <b>B</b> cents remaining in your purse after depositing the <b>C</b> cents, then after the transformation you will have <b>B</b> dollars and <b>A</b> cents. You can repeat this procedure as many times as you want unless you don't have enough money for the machine. If at any point <b>C &gt; B</b> and <b>A &gt; 0</b>, then the machine will allow you to break one of the A dollars into <b>100</b> cents so you can place <b>C</b> cents in the machine. The machine will not allow you to exchange a dollar for <b>100</b> cents if <b>B &gt;= C</b>.
</p>

<p>
Of course, you want to do this to maximize your profit. For example if <b>C=69</b> and you have <b>9</b> dollars and <b>77</b> cents then after you put <b>69</b> cents in the machine you will have <b>8</b> dollars and <b>9</b> cents (<b>9.77 --&gt; 9.08 --&gt; 8.09</b>). But I should warn you that you can't cheat. If you try to throw away <b>9</b> cents before the transformation (in order to obtain <b>99</b> dollars and <b>8</b> cents after), the machine will sense you are cheating and take away all of your money. You need to know how many times you should do this transformation in order to make a maximum profit. Since you are very busy man, you want to obtain the maximum possible profit in the minimum amount of time.</p>
<h3>Input</h3>

<p> The first line contains a single integer <b>T &lt;= 40</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains three nonnegative integers <b>A</b>, <b>B</b> and <b>C</b> where <b>A, B, C &lt; 100</b>. It means that you have <b>A</b> dollars and <b>B</b> cents in your purse and you need to put <b>C</b> cents in the machine to make the transformation.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the minimal number of times you should do this transformation in order to make a maximal profit. It is guaranteed that the answer is less than <b>10000</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
9 77 69
98 99 69

<b>Output:</b>
4
0
</pre><h3>Explanation</h3>
<p>In the first test we have the following sequence: <b>9.77, 8.09, 40.07, 38.39, 70.37, 68.69, 0.68</b>. After last step we have not enough money for further transformations. The maximal profit will be after <b>4</b> transformations.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2011</td>
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