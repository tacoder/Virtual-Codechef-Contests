<?php require("../../includes/header.php"); ?><h1>Equivalent Suffix Tries</h1><div class="content">

<p><a href="http://en.wikipedia.org/wiki/Suffix_tree">Suffix trees</a> are very powerful data structures. Using suffix trees it's often easy to solve the hardest computer science problems on strings. In this problem we'll consider a simplified version of suffix trees -- suffix <a href="http://en.wikipedia.org/wiki/Trie">tries</a> (that is, tries formed by all suffixes of a given string).</p>
<p>Generally, the suffix tree is a tree whose edges are labeled with strings. Instead, we'll only consider suffix tries whose edges are labeled with single characters. This way every edge of a suffix tree may correspond to one or more edges connected in a chain-style fashion of a suffix trie.</p>
<p>Another trait of suffix trees is that each suffix of the string for which the suffix tree is built corresponds to exactly one path from the tree's root to a leaf. This is usually achieved by terminating each suffix of the string with a special character, say, $. However, in suffix tries we won't do that. In particular, this implies that the number of leaves in a suffix trie can be smaller than the length of the original string.</p>
<p>In the picture the suffix tries for strings 'aba' and 'abac' are presented:</p>
<p><img src="http://www.codechef.com/download/pic.PNG" /></p>
<p>If we erase all letters from the edges of a suffix trie, it actually becomes a directed graph. Let's call two suffix tries equivalent if their corresponding directed graphs are <a href="http://en.wikipedia.org/wiki/Graph_isomorphism">isomorphic</a>.</p>
<p>You're given a single string consisting of lowercase Latin letters. Your task is to find the number of different strings of the same length consisting of lowercase Latin letters as well such that their suffix tries are equivalent to the suffix trie of the given string. As this number can be large enough, output the remainder of its division by 42424242.</p>
<h3>Input</h3>
<p>The first line contains a single number <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains a single non-empty string of length no more than 100000 consisting of lowercase Latin letters <i>a</i>..<i>z</i>.</p>
<h3>Output</h3>
<p>For each test case output just one line containing the sought number modulo 42424242.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
a
aa
abc
aba
helloworld

<b>Output:</b>
26
26
15600
1300
6221124

<b>Explanation:</b>
</pre><p>In the first test case every string of length 1 satisfies the condition. In the second test case every string consisting of two equal letters is fine. In the third test case every string comprising three pairwise distinct letters adds 1 to the answer. In the fourth test case string 'bee' is one of the 1300 good strings.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-06-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>