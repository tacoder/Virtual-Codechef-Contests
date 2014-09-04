<?php require("../../includes/header.php"); ?><h1>Multiple Divide</h1><div class="content">
<p>You are given integers <b>N</b>,<b>K</b> and <b>M</b> and operation <b>F</b>. Operation <b>F</b> is defined for an integer as follows:</p>
<pre>
<b>F</b>:

for <b>i</b> from <b>1</b> to <b>M</b> inclusive, do
	if <b>N</b> is a multiple of <b>K</b>,
		divide <b>N</b> by <b>K</b>
	else,
		multiply <b>N</b> by <b>K</b>
print <b>N</b>
</pre><p>Perform the operation <b>F</b> on <b>N</b>.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> the number of test cases.<br /><br />
<b>T</b> lines follow each of them consists 3 space-separated integers <b>N K M</b> on a single line.</p>
<p> </p>
<h3>Output</h3>
<p>The output must consist of <b>T</b> lines the result obtained on performing operation <b>F</b> on <b>N</b>.</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b>&lt;=<b>T</b>&lt;=<b>40,000</b><br /><br />
<b>1</b>&lt;=<b>N</b>&lt;=<b>10^9</b><br /><br />
<b>1</b>&lt;=<b>K</b>&lt;=<b>10^4</b><br /><br />
<b>1</b>&lt;=<b>M</b>&lt;=<b>10^10</b><br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
42 3 2
6 7 1

<b>Output:</b>
42
42

</pre><p> </p>
<h3>Explanation</h3>
<p>Since 42 is divisible by 3, it is divided by 3 and 14 is obtained. Since 14 is not divisible by 3, it is multiplied by 3. Hence, 42 is obtained.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-05-2014</td>
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
            <td>ASM, C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, HASK, JAVA, PAS fpc, PAS gpc, PERL, PERL6, PYTH, PYTH 3.1.2, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>