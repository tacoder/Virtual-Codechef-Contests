<?php require("../../includes/header.php"); ?><h1>PARENTHESES ON MY MIND</h1><div class="content">

<p>While evaluating a expression of  N distinct factors i.e (A1 * A2 * ..... * An) , Chef wanted to know in how may ways this expression can be evaluated by parenthesizing two factors at a time.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, for each test case enter the string with N distinct factors (eg xyz , qwerty ,etc)</p>
<h3>Output</h3>
<p>For each test case, output a single line with number of ways to evaluate the given expression.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>34</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
ghjk
ab
<b>Output:</b>
5
1
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Case 1 : </b> expression ghjk can be evaluated in 5 ways i.e ((gh)j)k) , (g(h(jk)) , (g((hj)k)) , ((g(hj))k) &amp; ((gh)(jk))</p>
<p><b>Case 2 : </b> expression ab can be evaluated in single way i.e. (ab)</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/paramjeet">paramjeet</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>