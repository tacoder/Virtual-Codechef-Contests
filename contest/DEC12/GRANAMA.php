<?php require("../../includes/header.php"); ?><h1>Granama Recipes</h1><div class="content">

<p>Chef has learned a new technique for comparing two recipes. A recipe contains a list of ingredients in increasing order of the times they will be processed. An ingredient is represented by a letter 'a'-'z'. The <b>i</b>-th letter in a recipe denotes the <b>i</b>-th ingredient. An ingredient can be used multiple times in a recipe.</p>
<p>The technique is as follows. Compare two recipes by comparing their respective lists. If the sets of ingredients used in both recipes are equal and each ingredient is used the same number of times in both of them (processing order does not matter), they are declared as <b>granama</b> recipes. ("granama" is the Chef-ian word for "similar".)</p>
<p>Chef took two recipes he invented yesterday. He wanted to compare them using the technique. Unfortunately, Chef forgot to keep track of the number of times each ingredient has been used in a recipe. He only compared the ingredients but NOT their frequencies. More precisely, Chef considers two recipes as granama if there are no ingredients which are used in one recipe and not used in the other recipe.</p>
<p>Your task is to report whether Chef has correctly classified the two recipes (as granama or not granama) although he forgot to keep track of the frequencies.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description for <b>T</b> test cases follows. Each test case consists of a single line containing two space-separated strings <b>R</b> and <b>S</b> denoting the two recipes.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing "YES" (quotes for clarity) if Chef correctly classified the two recipes as granama or not granama. Otherwise, output a single line containing "NO" (quotes for clarity) if Chef declared two recipes as granama when they actually are not.</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 100<br />1 ≤ |<b>R</b>|, |<b>S</b>| ≤ 1000</p>
<h3>Example</h3>
<p><b>Input:</b><br/></br/></p>
<pre>
3
alex axle
paradise diapers
alice bob

</pre><p>
<b>Output:</b><br/></br/></p>
<pre>
YES
NO
YES

</pre><p>
<b>Explanation:</b><br/></br/></p>
<p>Example case 1: Chef declared them as granama recipes. They are actually granama because the sets of ingredients and the number of times each ingredient has been used are equal. The Chef got it right!</p>
<p>Example case 2: Chef declared them as granama recipes because both sets of ingredients are equal. But they are NOT granama since ingredient 'a' has been used twice in the first recipe but only once in the second. The Chef was incorrect!</p>
<p>Example case 3: Chef declare them as not granama. They are not granama as the sets of ingredients are different. Hence, the Chef was right!</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2012</td>
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