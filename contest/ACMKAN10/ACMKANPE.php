<?php require("../../includes/header.php"); ?><h1>Algebra Express</h1><div class="content">

<p>
Input file : stdin<br />
Output file: stdout</p>
<p>Mim is a high school algebra teacher. Just last week, she taught her students how to evaluate an expression. For example, if</p>
<pre>r = a &times; (b + c) &#8722; d &times; e<br /></pre>
<p>Given the values of a, b, c, d and e, they can evaluate r.<br />
Now, to test how well her students are able to do these arithmetic, she has to prepare some test. But, she do this every year, and each time she has to make same type of questions. That made her a little bored. She thinks that evaluating an expression only depends on the position of operators and variables, not the variables itself. For example in the expression above, for all possible values of a, b, c, d and e, they will all be equally hard to evaluate.</p>
<p>She has made some generic expressions, and a set of values, which she may use in any order (e.g. one time she may use a = 2, b = 5, another time she may use a = 5, b = 2). Now, she wants to know, the number of possible ways to assign these values, so that, the value of the expression lies within a specified limit.</p>
<h3>Input</h3>
<p>First line contains T, the number of test cases.</p>
<p>Each test case starts with three integers N(2 &#8804; N &#8804; 12), l, h (&#8722;1012 &#8804; l &#8804; h &#8804; 1012), the number of variables, lower limit and the upper limit of the acceptable expression values.</p>
<p>Next line contains N integers ai(0 &#8804; ai &#8804; 9), the value of the variables she will be using in the exam.</p>
<p>Next line contains the expression, where each variable is represented as &lsquo;x&rsquo;. The expression will be well formed, and will contain only the symbols &lsquo;+&rsquo;, &lsquo;-&rsquo;, &lsquo;*&rsquo;,&lsquo;(&rsquo;,&lsquo;)&rsquo; and &lsquo;x&rsquo;.</p>
<h3>Output</h3>
<p>For each test case, output the number of different assignments, that produce results within the limit [l, h].</p>
<p>Note that, you will be replacing each &lsquo;x&rsquo; with a value aj(1 &#8804; j &#8804; N). Each aj have to be used exactly once. Two assignments are considered the same, if, after replacing all &lsquo;x&rsquo;, the expressions look the same.</p>
<h3>Sample input and output</h3>
<table>
<tr>
<td>stdin</td>
<td>stdout</td>
</tr>
<tr>
<td>3</td>
<td>4</td>
</tr>
<tr>
<td>3 1 10</td>
<td>4</td>
</tr>
<tr>
<td>1 2 5</td>
<td>0</td>
</tr>
<tr>
<td>x+x*x</td>
<td></td>
</tr>
<tr>
<td>4 1 10</td>
<td></td>
</tr>
<tr>
<td>1 2 2 5</td>
<td></td>
</tr>
<tr>
<td>(x+x)*(x-x)</td>
<td></td>
</tr>
<tr>
<td>4 1 100</td>
<td></td>
</tr>
<tr>
<td>1 1 1 1</td>
<td></td>
</tr>
<tr>
<td>x*(x-(x*x)</td>
<td></td>
</tr>
</table>
    </div><table>
<tr>
<td>stdin</td>
<td>stdout</td>
</tr>
<tr>
<td>3</td>
<td>4</td>
</tr>
<tr>
<td>3 1 10</td>
<td>4</td>
</tr>
<tr>
<td>1 2 5</td>
<td>0</td>
</tr>
<tr>
<td>x+x*x</td>
<td></td>
</tr>
<tr>
<td>4 1 10</td>
<td></td>
</tr>
<tr>
<td>1 2 2 5</td>
<td></td>
</tr>
<tr>
<td>(x+x)*(x-x)</td>
<td></td>
</tr>
<tr>
<td>4 1 100</td>
<td></td>
</tr>
<tr>
<td>1 1 1 1</td>
<td></td>
</tr>
<tr>
<td>x*(x-(x*x)</td>
<td></td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>