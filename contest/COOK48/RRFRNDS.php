<?php require("../../includes/header.php"); ?><h1>Friends</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRFRNDS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRFRNDS.pdf">Russian</a> as well.</h3>
<p> </p>
<p>After IOI Ilya decided to make a business.  He found a social network called "TheScorpyBook.com". It currently has <b>N</b> registered users. As in any social network two users can be friends. Ilya wants the world to be as connected as possible, so he wants to suggest friendship to some pairs of users. He will suggest user <b>u</b> to have a friendship with user <b>v</b> if they are not friends yet and there is a user <b>w</b> who is friends of both of them. Note that <b>u</b>, <b>v</b> and <b>w</b> are different users. Ilya is too busy with IPO these days, so he asks you to count how many friendship suggestions he has to send over his social network.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer number <b>N</b> — the number of users in the network. Next <b>N</b> lines contain <b>N</b> characters each denoting friendship relations. <b>j<sup>th</sup></b> character if the <b>i<sup>th</sup></b> lines equals one, if users <b>i</b> and <b>j</b> are friends and equals to zero otherwise. This relation is symmetric, i.e. if user <b>a</b> is friend of <b>b</b> then <b>b</b> is also a friend of <b>a</b>.</p>
<p> </p>
<h3>Output</h3>
<p>Output a single integer — number of friendship suggestions Ilya has to send.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
0111
1000
1000
1000

<b>Output:</b>
6
</pre><p> </p>
<h3>Explanation</h3>
<p>Each of users <b>[2, 3, 4]</b> should receive two friendship suggestions, while user <b>1</b> does not need any, since he already has all other users in his friend-list.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-07-2014</td>
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