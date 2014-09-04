<?php require("../../includes/header.php"); ?><h1>Crack the Safe</h1><div class="content">
<p> </p>
<p>Being in a possession of an information so valuable, Irene Adler decides to lock it up in her safe. Sherlock using his detective and charming skills, finds out the place where Irene has hid the data. Irene knew that this day would come, so she had locked the safe up with a secret pass phrase. Since she wanted to be extra secure she had used  a sequence of <strong>N</strong> passwords of length <strong>M</strong> each. In order to unlock the safe, one has to type in all <strong>N</strong> passwords in the exact sequential order. However the lock has a major security flaw - it can accept a password or any of its anagrams.  </p>
<p> The lock has a display and a keypad that contains only lower case alphabet keys and a backspace button. When Sherlock hits the keys, the text is shown in the display and when he fills the display with M characters, the lock will automatically check if the typed in text is an anagram of the expected password. Then, Sherlock may proceed to type in the next password by removing the last character/characters he has pressed by using the backspace key. When Sherlock has typed in the last password, the lock will release and the safe will open. <br />  <br />Even if 2 adjacent passwords in the sequence is the same, Sherlock has to hit the backspace key and retype the last character again to make the lock accept both the passwords. </p>
<p> Sherlock finds this job too tedious for him and he wants to get this done as soon as possible. Can you help him find the minimum number of keystrokes(includes backspaces also) needed to type in all the passwords in the given sequential order?</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input has 2 integers N and M denoting the number of password strings and the length of each. <br /> N lines follow, each having a string of M characters. The strings are given in the exact order in which they have to be typed in the keypad.</p>
<p> </p>
<h3>Output</h3>
<p>Print a single integer denoting the minimum number of keys that Sherlock has to press to type in all the pass phrases in the given sequential order.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>700</strong></li>
<li><strong>1</strong> ≤ <strong>M</strong> ≤ <strong>700</strong></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3 3 
aab
aac
bde

<strong>Output:</strong>
11
</pre><p> </p>
<pre><strong>Input:</strong>
2 3
abc
cba

<strong>Output:</strong>
5<br />
</pre><p><span>Explanation</span></p>
<p>For the first test case, Sherlock has to type in the following sequence of characters a, a, b, &lt;-, c, &lt;-, &lt;-, &lt;-, b, d, e thereby typing in 11 characters.(&lt;- denotes the backspace key)</p>
<p>In the second test case, Sherlock can follow the sequence a, b, c, &lt;-, c to type in all the pass phrases.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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