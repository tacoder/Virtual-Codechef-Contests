<?php require("../../includes/header.php"); ?><h1>Cipher</h1><div class="content">
<p>Smugglers are becoming very smart day by day. They use SMS to communicate with each other. Police can often intercept their messages and bust them. Now they have developed a new technique of sending their messages from one smuggler to another.</p>
<p>In their new technology, they are sending their messages in a number format. This format represents the way that numbers and characters are padded on mobile’s keypad. </p>
<p>One smuggler sends a text message to the second smuggler, using the numbers corresponding to the letters on the keypad. When the receiving smuggler gets the message, he simply opens the “create text message” function in his mobile and types the number string. This way the receiver finally reads the original message.</p>
<table border="0">
<tr>
<td><b>1</b></td>
<td><b>2</b>ABC</td>
<td><b>3</b>DEF</td>
</tr>
<tr>
<td><b>4</b>GHI</td>
<td><b>5</b>JKL</td>
<td><b>6</b>MNO</td>
</tr>
<tr>
<td><b>7</b>PQRS</td>
<td><b>8</b>TUV</td>
<td><b>9</b>WXYZ</td>
</tr>
<tr>
<td><b>*</b></td>
<td><b>0</b>[SPACE]</td>
<td><b>#</b></td>
</tr>
</table>
<p></p><p>
<b>For Example:</b><br />
6999066263304447777077766622337778 -----&gt; message sent by the first smuggler.<br />
my name is robert---------&gt; message decoded by the second smuggler.<br />
Where ‘0’ denotes the "space".</p>
<p>But for word <b>monkey</b><br />
6#666#665533999 this string will be sent by the smuggler one<br />
Here ‘# ‘ denotes that if smuggler watches ‘#’ then it means character previous to # is on the same key to the character after the ‘#’ and smuggler has to wait for 2 seconds and then press the same key. </p>
<p> You have to make a program  that takes as input a numerically coded string as message and outputs decoded message.</p>
<h3>Constraints</h3>
<ul>
<li>Smuggler can never send numbers in message text</li>
<li>Output will always be in uppercase</li>
<h3>Input</h3>
<p>First line <b>T</b>, will have a single integer having number of test cases followed by T lines of input each having CODED message send by smuggler 1.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the message smuggler 2 will get after decoding.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
6999066263304447777077766622337778
6#666#665533999 

<b>Output:</b>
MY NAME IS ROBERT
MONKEY
</pre><p><h3> Explanation:</h3>
</p><p>By pressing ‘6’ (i.e. key’6’ one time) on the keypad, the mobile shows ‘m’ on display screen in write text message area.</p>
<p>By pressing ‘999’ (i.e. key ‘9’ three times) on the keypad, the mobile shows ‘y’ on display screen in write text message area.</p>
<p>By pressing ‘0’ (i.e. key ’0’ one time) on the keypad, the mobile shows ‘space’ on display screen in write text message area.</p>
<p>By pressing ‘66’ (i.e. key’6’ two times) on the keypad, the mobile shows ‘n’ on display screen in write text message area.</p>
<p>By pressing ‘2’ (i.e. key ’2’ one time) on the keypad, the mobile shows ‘a’ on display screen in write text message area.</p>
<p>By pressing ‘6’ (i.e. key '6'one time) on the keypad, the mobile shows ‘m’ on display screen in write text message area.</p>
<p>By pressing ‘33’ (i.e. key ‘3’ two times) on the keypad, the mobile shows ‘e’ on display screen in write text message area.</p>
<p>By pressing ‘0’ (i.e. key ‘0’ one time) on the keypad, the mobile shows ‘space’ on display screen in write text message area.</p>
<p>By pressing ‘444’ (i.e. key’4’ three times) on the keypad, the mobile shows ‘i’ on display screen in write text message area.</p>
<p>By pressing ‘7777’ (i.e. key ’7’ four times) on the keypad, the mobile shows ‘s’ on display screen in write text message area.</p>
<p>By pressing ‘0’ (i.e. key ‘0’ one time) on the keypad, the mobile shows ‘space’ on display screen in write text message area.</p>
<p>By pressing ‘777’ (i.e. key ’7’ three times) on the keypad, the mobile shows ‘r’ on display screen in write text message area.</p>
<p>By pressing ‘666’ (i.e. key ’6’ three times) on the keypad, the mobile shows ‘o’ on display screen in write text message area.</p>
<p>By pressing ‘22’ (i.e. key ‘2’ two times) on the keypad, the mobile shows ‘b’ on display screen in write text message area.</p>
<p>By pressing ‘33’ (i.e. key ‘3’ two times) on the keypad, the mobile shows ‘e’ on display screen in write text message area.</p>
<p>By pressing ‘777’ (i.e. key ’7’ three times) on the keypad, the mobile shows ‘r’ on display screen in write text message area.</p>
<p>By pressing '8' (i.e. key ’8’ one time) on the keypad, the mobile shows ‘t’ on display screen in write text message area. </p>
<p>
</p><p>
But for word monkey<br />
6#666#665533999 this string will be sent by the smuggler one</p>
<p>By pressing ‘6’ i.e. key’6’ one time on the keypad, the mobile shows ‘m’ on display screen.</p>
<p>For '#' wait for 2 seconds, and then press next.</p>
<p>By pressing ‘666’ i.e. key’6’ three times on the keypad, the mobile shows ‘o’ on display screen.</p>
<p>For ‘#’ wait for 2 seconds, and then press next.</p>
<p>By pressing ‘66’ i.e. key’6’ two times on the keypad, the mobile shows ‘n’ on display screen.</p>
<p>By pressing ‘55’ i.e. key’5’ two times on the keypad, the mobile shows ‘k’ on display screen.</p>
<p>By pressing ‘33’ i.e. key’3’ two times on the keypad, the mobile shows ‘e’ on display screen.</p>
<p>By pressing ‘999’ i.e. key’9’ three times on the keypad, the mobile shows ‘y’ on display screen. </p>
</ul>    </div><table border="0">
<tr>
<td><b>1</b></td>
<td><b>2</b>ABC</td>
<td><b>3</b>DEF</td>
</tr>
<tr>
<td><b>4</b>GHI</td>
<td><b>5</b>JKL</td>
<td><b>6</b>MNO</td>
</tr>
<tr>
<td><b>7</b>PQRS</td>
<td><b>8</b>TUV</td>
<td><b>9</b>WXYZ</td>
</tr>
<tr>
<td><b>*</b></td>
<td><b>0</b>[SPACE]</td>
<td><b>#</b></td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajat_vig">rajat_vig</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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