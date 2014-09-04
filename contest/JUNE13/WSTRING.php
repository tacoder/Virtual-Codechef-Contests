<?php require("../../includes/header.php"); ?><h1>W String</h1><div class="content">

<p>Kira likes to play with strings very much. Moreover he likes the shape of 'W' very much. He takes a string and try to make a 'W' shape out of it such that each angular point is a '#' character and each sides has same characters. He calls them <i>W strings</i>.</p>
<p>For example, the <i>W string</i> can be formed from "aaaaa#bb#cc#dddd" such as:</p>
<p>Kira likes to play with strings very much. Moreover he likes the shape of 'W' very much. He takes a string and try to make a 'W' shape out of it such that each angular point is a '#' character and each sides has same characters. He calls them <i>W strings</i>.</p>
<p>For example, the <i>W string</i> can be formed from "aaaaa#bb#cc#dddd" such as:</p>
<pre style="font-family: Courier, 'Courier New', monospace" class="text-monospace">    a
     a             d
      a     #     d
       a   b c   d
        a b   c d
         #     #
</pre><p>He also call the strings which can generate a 'W' shape (satisfying the above conditions) <i>W strings</i>.</p>
<p>More formally, a string <b>S</b> is a <i>W string</i> if and only if it satisfies the following conditions (some terms and notations are explained in <b>Note</b>, please see it if you cannot understand):</p>
<ul>
<li>The string <b>S</b> contains <b>exactly</b> <b>3</b> '#' characters. Let the indexes of all '#' be <b>P<sub>1</sub> &lt; P<sub>2</sub> &lt; P<sub>3</sub></b> (indexes are <b>0</b>-origin).</li>
<li>Each substring of <b>S[0, P<sub>1</sub>−1], S[P<sub>1</sub>+1, P<sub>2</sub>−1], S[P<sub>2</sub>+1, P<sub>3</sub>−1], S[P<sub>3</sub>+1, |S|−1]</b> contains exactly one kind of characters, where <b>S[a, b]</b> denotes the non-empty substring from <b>a+1</b><sup>th</sup> character to <b>b+1</b><sup>th</sup> character, and <b>|S|</b> denotes the length of string <b>S</b> (See <b>Note</b> for details).</li>
</ul>
<p>Now, his friend Ryuk gives him a string <b>S</b> and asks him to find the length of the longest <i>W string</i> which is a subsequence of <b>S</b>, with only one condition that there must not be any '#' symbols between the positions of the first and the second '#' symbol he chooses, nor between the second and the third (here the "positions" we are looking at are in <b>S</b>), i.e. suppose the index of the '#'s he chooses to make the <i>W string</i> are <b>P<sub>1</sub>, P<sub>2</sub>, P<sub>3</sub></b> (in increasing order) in the original string <b>S</b>, then there must be no index <b>i</b> such that <b>S[i]</b> = '#' where <b>P<sub>1</sub> &lt; i &lt; P<sub>2</sub> or P<sub>2</sub> &lt; i &lt; P<sub>3</sub></b>.</p>
<p>Help Kira and he won't write your name in the <b>Death Note</b>.</p>
<p><b>Note</b>:</p>
<p>For a given string <b>S</b>, let <b>S[k]</b> denote the <b>k+1</b><sup>th</sup> character of string <b>S</b>, and let the index of the character <b>S[k]</b> be <b>k</b>. Let <b>|S|</b> denote the length of the string <b>S</b>. And a substring of a string <b>S</b> is a string <b>S[a, b] = S[a] S[a+1] ... S[b]</b>, where <b>0 ≤ a ≤ b &lt; |S|</b>. And a subsequence of a string <b>S</b> is a string <b>S[i<sub>0</sub>] S[i<sub>1</sub>] ... S[i<sub>n−1</sub>]</b>, where <b>0 ≤ i<sub>0</sub> &lt; i<sub>1</sub> &lt; ... &lt; i<sub>n−1</sub> &lt; |S|</b>.</p>
<p>For example, let <b>S</b> be the string "kira", then <b>S[0]</b> = 'k', <b>S[1]</b> = 'i', <b>S[3]</b> = 'a', and <b>|S| = 4</b>. All of <b>S[0, 2]</b> = "kir", <b>S[1, 1]</b> = "i", and <b>S[0, 3]</b> = "kira" are substrings of <b>S</b>, but "ik", "kr", and "arik" are not. All of "k", "kr", "kira", "kia" are subsequences of <b>S</b>, but "ik", "kk" are not.</p>
<p>From the above definition of <i>W string</i>, for example, "a#b#c#d", "aaa#yyy#aaa#yy", and "o#oo#ooo#oooo" are <i>W string</i>, but "a#b#c#d#e", "#a#a#a", and "aa##a#a" are not.</p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> lines follow. Each line contains a string <b>S</b>.</p>
<h3>Output</h3>
<p>Output an integer, denoting the length of the longest <i>W string</i> as explained before. If <b>S</b> has no <i>W string</i> as its subsequence, then output <b>0</b>.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1 ≤ T ≤ 100 </b></li>
<li><b>1 ≤ |S| ≤ 10000 (10<sup>4</sup>)</b></li>
<li><b>S</b> contains no characters other than lower English characters ('a' to 'z') and '#' (without quotes)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
aaaaa#bb#cc#dddd
acb#aab#bab#accba
abc#dda#bb#bb#aca

<b>Output:</b>
16
10
11
</pre><h3>Explanation</h3>
<p>In the first case: the whole string forms a <i>W String</i>.</p>
<p>In the second case: acb#aab#bab#accba, the longest <i>W string</i> is ac<b>b#aa</b>b<b>#b</b>a<b>b#a</b>ccb<b>a</b></p>
<p>In the third case: abc#dda#bb#bb#aca, note that even though <b>a</b>bc<b>#dd</b>a<b>#bb</b>#<b>bb#a</b>c<b>a</b> (boldened characters form the subsequence) is a <i>W string</i> of length <b>12</b>, it violates Ryuk's condition that there should not be any #'s inbetween the <b>3</b> chosen # positions. One correct string of length <b>11</b> is <b>a</b>bc#dd<b>a#bb#bb#a</b>c<b>a</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jay_adm">jay_adm</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-04-2013</td>
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