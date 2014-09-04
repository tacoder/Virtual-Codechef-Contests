<?php require("../../includes/header.php"); ?><h1>A Story with Strings</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/SSTORY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/SSTORY.pdf">Russian</a>.</h3>
<p>Lira and her best friend are now ending highschool and soon they both will head separate ways...</p>
<p>Lira will obviously study Computer Science while her best friend will study Arts... (apparentely, opposites attract, alikes repel right?)</p>
<p>However, as Lira didn't want to lose contact with her, she decided to mix Art and Computer Science one last time and amaze her friend with Computer Science, so she could have a geek coding partner.</p>
<p>To amaze her, she encoded a message in two strings, which she presented to her friend:</p>
<p>Lira: "So, Mary, as you can see, we have two strings here, yes? We have a first longer string, <b>S1</b>, which encodes our common path together, and is represented by some letters which represent our lives so far as well all the events we lived together.</p>
<p>The second string, <b>S2</b>, will be as long as the first one, or possibly shorter and it is here to represent what the future might bring to both of us :) It is also only composed of letters, which represent some life events we might still experience together in the future.</p>
<p>What I would like you to do, is to find out if the future will be just like now, and, for that,you need to find a contiguous sequence of letters in both of these two strings.</p>
<p>Obviously, as I want our friendship to last very, very much, I ask you to find the longest sequence of life events we might still experience together  and tell me which sequence is it and how long is it :D</p>
<p>However, if fate doesn't want us to be together, simply tell me the number 0 and we shall both head separate ways forever.</p>
<p>Turns out, that after Mary solved the problem, she became so interested in CS herself, that both she and Lira are now working together at a very reputable software company. :) </p>
<p> </p>
<h3>Input</h3>
<p>The input will consist of two strings composed only of the letters <b>a..z</b>, both of which are at most 250.000 characters in length.</p>
<h3>Output</h3>
<p>The output should be as stated.</p>
<p>If there is a common life event in Mary and Lira's lives, you should output it on a single line and, on another line, you should output the length of the event.</p>
<p>Otherwise, simply output 0.</p>
<p><b>
<p>On the case where there are multiple answers, the first common event to be found on the second string, should be written to output, followed by its length. See example 3 for details.</p>
<p></p></b></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S1|</b> ≤ <b>250000</b></li>
<li><b>1</b> ≤ <b>|S2|</b> ≤ <b>250000</b></li>
<li><b>1</b> ≤ <b>|S2|</b> ≤ <b>|S1|</b></li>
<li><b>The last constraint simply means that S2 will never be larger than S1</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input 1:</b>
adsyufsfdsfdsf
fdyusgfdfyu

<b>Output 1:</b>
fd
2
</pre><p> </p>
<pre><b>Input 2:</b>
adsyufsfdsfdsf
bbbbbbbbb

<b>Output 2:</b>
0
</pre>
<pre><b>Input 3:</b>
abcdef
defabc

<b>Output 3:</b>
def
3
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b>The longest life event is <b>"fd"</b> whose length is 2.</p>
<p><b>Example case 2.</b>The girls will follow separate lives.</p>
<p><b>Example case 3.</b>On the case where multiple events can happen, <b>Mary will choose the event which is closer to happen in the future</b>, and, as such, answer is "def".</p>
<p><b>Note: The Mary in this problem, is actually a small tribute to my coder friend Mary Kuchumova, which, hopefully will return to Codechef and get back in touch again. :D Mary, you're missed!</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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