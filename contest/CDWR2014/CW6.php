<?php require("../../includes/header.php"); ?><h1>MUSICAL PROBLEM</h1><div class="content">

<p>
<br />Ayan's favourite musical instrument is the keyboard. He practices regularly as well, you can hear him playing even at 3 or 4 in the night.<br />
<br />Unfortunately, he got into a fight in his room and his keyboard was damaged beyond repair. However, being a rich fellow he quickly ordered another one.<br />
<br />But this time he felt a bit adventurous. He decided to buy a circular keyboard i.e keys are arranged in a circle.<br />
<br />This funky keyboard has only 12 keys though - C,C#,D,D#,E,F,F#,G,G#,A,B and S.<br />
<br />Since the layout is quite different to what he is used to, he needs to relearn basics of music theory again.<br />
<br />Firstly, a semitone is the distance between any two keys. So there are 3 semitones between D and F, and 2 semitones between S and C# (remember it is circular!)<br />
<br />He knows a chord is an unordered set of three or more than three keys. However, Ayan wants to start slow and considers only triads - chords of size 3.<br />
<br />Triads come in two varieties - major and minor. In a major triad the number of semitones between the first and second key is 4, and between the second and third - 3.<br />
<br />Minor triads on the other hand have 3 semitones between the first and second keys, 4 semitones between the second and third one.<br />
<br />For example, D F# A is a major triad, while D F A is minor.<br />
<br />Ayan needs your help classifying some basic triads. Kindly help him.<br />
<br />
</p>

<h2>Input</h2>
<p> The first line of input is the number of test cases T (1&lt;=T&lt;=25).<br />
<br /> The next T lines contain three characters corresponding to the musical keys on the circular keyboard.<br />
<br /> Note that # keys will be given as small letters and normal keys as capital letters. So C# will be given as c, while D will remain D.<br />
<br /> It is guaranteed that the triads will be either major or minor.
</p>
<h2>Output</h2>
<p> For each test case, print "Major" or "Minor" in a separate line, depending on whether the given triad is major or minor. </p>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>
<br />2<br />
<br />E G S<br />
<br />S d f<br />
<br />
</p>
<p> <b>Output:</b></p>
<p>Minor<br />
<br />Major<br />
<br />
</p>
<h2>Explanation</h2>
<p><b>Example case 1.</b> E and G have a 3 semitone gap, while G and S have a 4 semitone gap. So Minor.<br />
<br /> S and D# have a 4 semitone gap (remember circular) and D# and F# have a 3 semitone gap. So Major.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>