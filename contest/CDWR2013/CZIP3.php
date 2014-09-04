<?php require("../../includes/header.php"); ?><h1>P A N C A K E Sorting</h1><div class="content">
<p><span><span><strong>Pancake sorting</strong> is a variation of the sorting problem in which the only allowed operation is to reverse the elements of some <em>prefix</em> of the sequence. Unlike a traditional sorting algorithm, which attempts to sort with the fewest comparisons possible, the goal is to sort the sequence in as few reversals as possible. This operation can be visualized by thinking of a stack of pancakes in which one is allowed to take the top <strong>K</strong> consecutive pancakes and flip them.</span></span></p>
<p><span><span><span>In this problem we will try to sort characters instead of pancakes. You are given a sequence of characters of length <strong>N </strong> and you are allowed only one operation (similar to the Pancake problem). However, instead of only the top <strong>K</strong>, here you are allowed to  reverse any <strong>K</strong> consecutive elements of the sequence. Your goal is to sort the sequence in non-increasing order. </span></span></span></p>
<h3><span><span><span>Input</span></span></span></h3>
<p><span><span><span> The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. The first line of each test case contains two space separated integers <strong>N</strong> and <strong>K</strong> denoting the length of the sequence and number of  consecutive element you can reverse. The second line contains <strong>N</strong> space-separated distinct lower case alphabets ('a'-'z') <strong>A1</strong>, <strong>A2</strong>, ..., <strong>AN</strong> denoting the character sequence you need to sort.</span></span></span></p>
<h3><span><span><span>Output</span></span></span></h3>
<p><span><span>An integer denoting the minimum number of operations required for sorting the sequence or “NP” (quotes for clarity) if it is impossible. </span></span></p>
<h3><span><span>Constraints</span></span></h3>
<ul>
<li><span><span><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>10</strong></span></span></li>
<li><span><span><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>9</strong></span></span></li>
<li><span><span><strong>0</strong> ≤ <strong>K</strong> ≤ <strong>N</strong></span></span></li>
</ul>
<h3><span><span>Example</span></span></h3>
<pre><span><span></span></span></pre><p><strong>Input:</strong></p>
<pre>
4
3 2
d s l 
7 5
u e q n f m g 
2 2
a y
9 4
t j l a z i b y g</pre><p><br />
<strong>Output:</strong> </p>
<pre>
2
NP
1
NP</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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