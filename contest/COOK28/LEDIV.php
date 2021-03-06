<?php require("../../includes/header.php"); ?><h1>Little Elephant and Divisors</h1><div class="content">

<p style="text-align:justify">
The Little Elephant from the Zoo of Lviv has an array <b>A</b> that consists of <b>N</b> positive integers. Let <b>A[i]</b> be the <b>i</b>-th number in this array (<b>i = 1, 2, ..., N</b>).</p>
<p style="text-align:justify">
Find the minimal number <b>x &gt; 1</b> such that <b>x</b> is a divisor of all integers from array <b>A</b>. More formally, this <b>x</b> should satisfy the following relations:
</p>
<p style="text-align:center">
<b>A[1] mod x = 0</b>, <b>A[2] mod x = 0</b>, ..., <b>A[N] mod x = 0</b>,
</p>
<p style="text-align:justify">
where <b>mod</b> stands for the modulo operation. For example, <b> 8 mod 3 = 2</b>, <b> 2 mod 2 = 0</b>, <b>100 mod 5 = 0</b> and so on. If such number does not exist, output <b>-1</b>.</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a single integer <b>N</b>, the size of the array <b>A</b> for the corresponding test case. The second line contains <b>N</b> space separated integers <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b>.
</p>
<h3>Output</h3>
<p style="text-align:justify">
For each test case output a single line containing the answer for the corresponding test case.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<b>1</b> &le; <b>T</b> &le; <b>100000</b></p>
<p><b>1</b> &le; <b>N</b> &le; <b>100000</b></p>
<p>The sum of values of <b>N</b> in each test file does not exceed <b>100000</b></p>
<p><b>1</b> &le; <b>A[i]</b> &le; <b>100000</b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
2 4 8
3
4 7 5

<b>Output:</b>
2
-1

</pre><h3>Explanation</h3>
<p style="text-align:justify">
<b>Case 1.</b> Clearly 2 is a divisor of each of the numbers 2, 4 and 8. Since 2 is the least number greater than 1 then it is the answer.
</p>
<p style="text-align:justify">
<b>Case 2.</b> Let's perform check for several first values of <b>x</b>.
</p>
<p style="text-align:justify">
<table width="50%" border=1>
<tr>
<td><b>x</b></td>
<td><b>4 mod x</b></td>
<td><b>7 mod x</b></td>
<td><b>5 mod x</b></td>
</tr>
<tr>
<td>2</td>
<td>0</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>1</td>
<td>1</td>
<td>2</td>
</tr>
<tr>
<td>4</td>
<td>0</td>
<td>3</td>
<td>1</td>
</tr>
<tr>
<td>5</td>
<td>4</td>
<td>2</td>
<td>0</td>
</tr>
<tr>
<td>6</td>
<td>4</td>
<td>1</td>
<td>5</td>
</tr>
<tr>
<td>7</td>
<td>4</td>
<td>0</td>
<td>5</td>
</tr>
<tr>
<td>8</td>
<td>4</td>
<td>7</td>
<td>5</td>
</tr>
<tr>
<td>9</td>
<td>4</td>
<td>7</td>
<td>5</td>
</tr>
</table>
</p>
<p style="text-align:justify">
As we see each number up to 9 does not divide all of the numbers in the array. Clearly all larger numbers also will fail to do this. So there is no such number <b>x &gt; 1</b> and the answer is <b>-1</b>.
</p>
    </div><table width="50%" border=1>
<tr>
<td><b>x</b></td>
<td><b>4 mod x</b></td>
<td><b>7 mod x</b></td>
<td><b>5 mod x</b></td>
</tr>
<tr>
<td>2</td>
<td>0</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>1</td>
<td>1</td>
<td>2</td>
</tr>
<tr>
<td>4</td>
<td>0</td>
<td>3</td>
<td>1</td>
</tr>
<tr>
<td>5</td>
<td>4</td>
<td>2</td>
<td>0</td>
</tr>
<tr>
<td>6</td>
<td>4</td>
<td>1</td>
<td>5</td>
</tr>
<tr>
<td>7</td>
<td>4</td>
<td>0</td>
<td>5</td>
</tr>
<tr>
<td>8</td>
<td>4</td>
<td>7</td>
<td>5</td>
</tr>
<tr>
<td>9</td>
<td>4</td>
<td>7</td>
<td>5</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-10-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>