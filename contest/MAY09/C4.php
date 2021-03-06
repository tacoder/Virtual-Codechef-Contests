<?php require("../../includes/header.php"); ?><h1>Healthy dinner party</h1><div class="content">

<p>
The Chef is having a dinner party and invited over all his friends.  His guests<br />
being fairly health conscious have <strong>exact protein requirements</strong>, and The Chef wishes to oblige them all.</p>
<p>
The Chef will cook dishes for each individual guest using the ingredients in his kitchen.  Each ingredient has a specific amount of protein. The complete dish will have a protein content value equal to the sum of the protein<br />
contents of the individual ingredients. To cook a dish, The Chef can use any of the ingredients which appear on his shelf, <strong>but only in the order which they appear on the shelf</strong>.  The same ingredient may appear multiple times, and can also be used as many times as it appears.
</p>
<p>
There are multiple ways to choose ingredients following the rules given above. However, The Chef is only interested in choosing the set of ingredients that appear first in a <strong>lexicographically ordered</strong> list of ingredients which satisfy the protein constraints.  Your job is to write a program that helps The Chef figure out which dish to serve!
</p>
<h3>Input</h3>
<p>The first line of input contains <tt><em>t</em></tt>, the number of guests invited by The Chef (about 200). </p>
<p>
Each test consists of three lines:</p>
<ul>
<li>The first line consists of one integer <tt>1 &lt;= <em>k</em> &lt;= 26</tt> (the number of <strong> unique </strong> ingredients on the shelf) and than <tt><em>k</em></tt><br />
space-separated positive integers from the set <tt>{1, 2, ... ,15}</tt> describing the protein content for each ingredient in an alphabetically sorted list of unique ingredients.  (the first protein value corresponds with ingredient <tt>a</tt>, the second corresponds with the protein value for ingredient <tt>b</tt>, and so on).
</li><li>The second line contains <em>L</em> - a sequence of lower-case letters of the Latin alphabet (at most 1000) which signify the name of the ingredient.
</li><li>The third line contains one positive integer S which specifies the exact protein requirement of this guest (<tt><em>1 &lt; S &lt; 500</em></tt>).
</li></ul>
<h3>Output</h3>
<p>For each testcase either output the sequence of ingredients as described above, or the word '<tt>IMPOSSIBLE</tt>' if no such subsequence exists.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 12 1 12 4 4
acccdadceb
2
3 5 4 6
abcbacbabcc
15
2 3 4
baba
7

<b>Output:</b>
IMPOSSIBLE
aaa
ab
</pre><p><br/></br/></p>
<p><b>Comments:</b></p>
<p>For the first guest we have five ingredients: <tt>a, b, c, d, e</tt> with protein values <tt>12 1 12 4 4</tt> respectively. To achieve a total protein value equal to <tt>2</tt> we need two ingredients <tt>b</tt>. But there is only one, thus the answer is <tt>IMPOSSIBLE</tt>.   </p>
<p>For the second guest we can achieve a total protein value of 15 with the ingredients taken as: <tt>abc, bca, acb, cab, cba, bac</tt>, or <tt>aaa</tt>. Of these, the first according to lexicographic order is <tt>aaa</tt>.</p>
<p>
For the third guest, out of the two possibilities, <tt>ab</tt> is the correct answer.   </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>