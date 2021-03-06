<?php require("../../includes/header.php"); ?><h1>Peaceful Calculator</h1><div class="content">

<p>In the 1920's a mad scientist by the name Exor invented a notation for evaluating complex mathematical expressions. This notation popularly goes by the name <b>"Zenfix"</b> notation. In more formal terms, <b>Zenfix</b> expression is an expression which consists of <b>tokens</b>. Each <b>token</b> is either an operation from the list <b>{ ! , ^ , / , * , + , - }</b> or an integer.</p>
<p>All arithmetic operation here are <b>32-bit operations</b>. They are defined through auxiliary unary operation <b>32-bit residue</b> as follows (please read this carefully, some definitions are non-standard):</p>
<ul>
<li><b>32-bit residue of A</b> is defined as the unique integer <b>X</b> in the range <b>[-2<sup>31</sup>, 2<sup>31</sup>)</b> for which the usual difference of <b>A</b> and <b>X</b> is divisible by <b>2<sup>32</sup></b>.</li>
<li><b>32-bit difference A - B</b> is defined as a 32-bit residue of the usual difference of <b>A</b> and <b>B</b>.</li>
<li><b>32-bit sum A + B</b> is defined as a 32-bit residue of the usual sum of <b>A</b> and <b>B</b>.</li>
<li><b>32-bit product A * B</b> is defined as a 32-bit residue of the usual product of <b>A</b> and <b>B</b>.</li>
<li><b>32-bit quotient A / B</b> is defined as the smallest integer <b>C</b> in the range <b>[-2<sup>31</sup>, 2<sup>31</sup>)</b> such that <b>B * C = A</b> (note the <b>B * C</b> here is a 32-bit product of <b>B</b> and <b>C</b>). If no such integer <b>C</b> exists then result of division is undefined, which means that error occurs during the calculation.</li>
<li><b>32-bit power A ^ B</b> is defined as follows. For <b>B &gt; 0</b> we define <b>A ^ B = A * A * ... * A</b>, where <b>A</b> repeats <b>B</b> times (here * is a 32-bit multiplication). For <b>B = 0</b> we define <b>A ^ 0 = 1</b>. Finally, for <b>B &lt; 0</b> we define <b>A ^ B = 1 / (A ^ (-B))</b>, where <b>A ^ (-B)</b> is defined above (<b>-B</b> is the usual negation of <b>B</b>) and / is a 32-bit division operation. If result of division here is undefined it means that error occurs during the calculation.</li>
<li><b>32-bit factorial A!</b> is defined as follows. For <b>A &gt; 0</b> we define <b>A! = 1 * 2 * 3 * ... * A</b> (here * is a 32-bit multiplication). For <b>A = 0</b> we define <b>0! = 1</b>. Finally, for <b>A &lt; 0</b> we define <b>A! = (-1) * (-2) * (-3) * ... * A</b> (here again * is a 32-bit multiplication and <b>-X</b> for <b>X = 1, 2, 3, ...</b> means usual negation).</li>
</ul>
<p> </p>
<p>Each operation has its own priority defined by its index in this list: the smaller the index the higher the priority. Therefore,</p>
<ul>
<li>the most priority operation is <b>factorial</b> (<b>!</b>),</li>
<li>the second most priority operation is <b>exponentiation</b> (<b>^</b>),</li>
<li>the third most priority operation is <b>division</b> (<b>/</b>),</li>
<li>the fourth most priority operation is <b>multiplication</b> (<b>*</b>),</li>
<li>the fifth most priority operation is <b>addition</b> (<b>+</b>),</li>
<li>and, finally, the less priority operation is <b>subtraction</b> (<b>-</b>).</li>
</ul>
<p> </p>
<p>We could abbreviate the list of operations sorted by priority as <b>FEDMAS</b> (the first letter of the title of each operation was chosen).</p>
<p>The evaluation of a <b>Zenfix</b> expression goes as follows:</p>
<ol>
<li>If expression contains a factorial sign (<b>!</b>) followed by an integer then we choose the leftmost such occurrence and perform the factorial operation which will be defined below. Namely, we replace the integer that follows the factorial sign by its factorial value and delete the factorial sign from the expression.</li>
<li>Otherwise, if there exists an operation followed by at least 3 integers we at first choose the first operation in <b>EDMAS</b> with this property (that is, among operations followed by at least three integers we choose the operation with the highest priority). Then we choose the leftmost occurrence of such a case with this operation and perform calculation. Namely, we replace the operation and two following integers by the result of this operation applied to these integers. If error occurs during this calculation then you should stop evaluation of expression.</li>
<li>Otherwise, if there exists an operation followed by exactly 2 integers we proceed exactly as in the previous rule.</li>
<li>We repeat the first three steps until we can no longer repeat them or error occurs during some calculation.</li>
<li>At the end of this evaluation, if we are left with a single integer, the expression is called correct, otherwise it is called incorrect. In particular, if error occurs during some calculation, the expression is incorrect.</li>
</ol>
<p> </p>
<p> </p>
<p>Your task is for the given Zenfix expression check whether it is correct or not by modeling process of its evaluation and output each intermediate calculation that occurs.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The first line of each test case contains a single integer <b>N</b>, denoting the number of tokens in the expression. The second line contains the expression as the list of <b>N</b> space-separated tokens.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li>Each token is either an integer in the range <b>[-2<sup>31</sup>, 2<sup>31</sup>)</b> or a character in the set <b>{ ! , ^ , / , * , + , - }</b></li>
<li>The sum of <b>N</b> over the input does not exceed <b>10000</b></li>
</ul>
<p> </p>
<h3>Output</h3>
<p>For each test case, output the process of evaluation of the expression. Namely, at each step when successful calculation is performed output on a separate line <b>I O A B C</b>. Here <b>I</b> is the index of the operation in the list of tokens of the current expression (tokens are number starting from 1). <b>O</b> is the operation itself (one of the characters in the set <b>{ ! , ^ , / , * , + , - }</b>). <b>A</b> and <b>B</b> are the operands. In case of a factorial operation (<b>!</b>), output <b>B</b> as <b>-1</b>. <b>C</b> is the result of operation <b>O</b> applied to numbers <b>A</b> and <b>B</b> (or only to <b>A</b> in case of a factorial operation). After all possible calculations are performed output <b>"OK"</b> if the expression is correct, and <b>"NOT OK"</b> otherwise.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
5
- 5 * 6 7
15
- * / 15 - 7 + 1 1 3 + 2 + 1 1
16
+ 2 3 4 * 1 2 3 4 ^ 6 7 * 5 6 7
21
! -3 + * 167 164 - 257 + 190 ! 6 - / 272 0 ^ 341 12 18 !

<b>Output:</b>
3 * 6 7 42
1 - 5 42 -37
OK
7 + 1 1 2
5 - 7 2 5
3 / 15 5 3
2 * 3 3 9
5 + 1 1 2
3 + 2 2 4
1 - 9 4 5
OK
5 * 1 2 2
11 * 5 6 30
8 ^ 6 7 279936
1 + 2 3 5
NOT OK
1 ! -3 -1 -6
10 ! 6 -1 720
15 ^ 341 12 2062435601
NOT OK
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br /> The expression is:</p>
<pre>- 5 * 6 7</pre><p>Considering evaluation rules we see that only the third rule with operation <b>*</b> is applicable.<br /> So we calculate <b>* 6 7</b>, which is <b>42</b>, and replace <b>* 6 7</b> with <b>42</b>:</p>
<pre>- 5 42</pre><p>Now we are left with only one operation followed by two integers.<br /> So we calculate <b>- 5 42</b>, which is <b>-37</b>, and replace <b>- 5 42</b> with <b>-37</b>:</p>
<pre>-37</pre><p>We are left with a single integer.<br /> Therefore, expression is correct and we output <b>"OK"</b>.</p>
<p> </p>
<p><b>Example case 2.</b><br /> The expression is:</p>
<pre>- * / 15 - 7 <span style="text-decoration: underline;"><b>+ 1 1</b></span> 3 + 2 + 1 1</pre><p>The underlined operation will be performed first as it is the only operation followed by at least three integers. So we replace <b>+ 1 1</b> with <b>2</b>:</p>
<pre>- * / 15 <span style="text-decoration: underline;"><b>- 7 2</b></span> 3 + 2 + 1 1</pre><p>By the same reason as above we replace <b>- 7 2</b> with <b>5</b>:</p>
<pre>- * <span style="text-decoration: underline;"><b>/ 15 5</b></span> 3 + 2 + 1 1</pre><p>By the same reason as above we replace <b>/ 15 5</b> with <b>3</b>:</p>
<pre>- <span style="text-decoration: underline;"><b>* 3 3</b></span> + 2 + 1 1</pre><p>Among candidates <b>* 3 3</b> and <b>+ 1 1</b>, the * is performed as it has higher priority.<br /> So we replace <b>* 3 3</b> with <b>9</b>:</p>
<pre>- 9 + 2 <span style="text-decoration: underline;"><b>+ 1 1</b></span></pre><p>The underlined operation is the only one followed by at least 2 integers.<br /> So we replace <b>+ 1 1</b> with <b>2</b>:</p>
<pre>- 9 <span style="text-decoration: underline;"><b>+ 2 2</b></span></pre><p>By the same reason as above we replace <b>+ 2 2</b> with <b>4</b>:</p>
<pre>- 9 4</pre><p>Now we are left with only one operation followed by two integers.<br /> So we replace <b>- 9 4</b> with <b>5</b>:</p>
<pre>5</pre><p>We are left with a single integer.<br /> Therefore, expression is correct and we output <b>"OK"</b>.</p>
<p> </p>
<p><b>Example case 3.</b><br /> The expression is:</p>
<pre>+ 2 3 4 <span style="text-decoration: underline;"><b>* 1 2</b></span> 3 4 ^ 6 7 * 5 6 7</pre><p>Among all the operations followed by at least 3 integers, * has the highest priority.<br /> As there are more than one such multiplications, we consider the leftmost one, which is underlined.<br /> So we replace <b>* 1 2</b> with <b>2</b>:</p>
<pre>+ 2 3 4 2 3 4 ^ 6 7 <span style="text-decoration: underline;"><b>* 5 6</b></span> 7</pre><p>Similarly as above, among all the operations followed by at least 3 integers, * has the highest priority.<br /> So we replace <b>* 5 6</b> with <b>30</b>:</p>
<pre>+ 2 3 4 2 3 4 <span style="text-decoration: underline;"><b>^ 6 7</b></span> 30 7</pre><p>Now, among all the operations followed by at least 3 integers, ^ has the highest priority.<br /> So we replace <b>^ 6 7</b> with <b>279936</b>:</p>
<pre><span style="text-decoration: underline;"><b>+ 2 3</b></span> 4 2 3 4 279936 30 7</pre><p>Now, there is only one operation that can be performed.<br /> So we replace <b>+ 2 3</b> with <b>5</b>:</p>
<pre>5 4 2 3 4 279936 30 7</pre><p>Now, no evaluation rule can be applied and we stop the evaluation.<br /> Since we are left with more than one token, the expression is incorrect and we output <b>"NOT OK"</b>.</p>
<p> </p>
<p><b>Example case 4.</b><br /> The evaluation proceeds as follows:</p>
<p> </p>
<pre><span style="text-decoration: underline;"><b>! -3</b></span> + * 167 164 - 257 + 190 ! 6 - / 272 0 ^ 341 12 18 !
-6 + * 167 164 - 257 + 190 <span style="text-decoration: underline;"><b>! 6</b></span> - / 272 0 ^ 341 12 18 !
-6 + * 167 164 - 257 + 190 720 - / 272 0 <span style="text-decoration: underline;"><b>^ 341 12</b></span> 18 !
-6 + * 167 164 - 257 + 190 720 - <span style="text-decoration: underline;"><b>/ 272 0</b></span> 2062435601 18 !
NOT OK
</pre><p> </p>
<p>Here at first two steps the first rule (with factorials) was applied.<br /> At the 3rd and the 4th step the 3rd rule was applied.<br /> Since quotient <b>272 / 0</b> is undefined (see the definition) we stop evaluation.<br /> So the expression is incorrect and we output <b>"NOT OK"</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-07-2012</td>
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