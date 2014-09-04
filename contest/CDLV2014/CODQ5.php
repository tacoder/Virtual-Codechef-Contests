<?php require("../../includes/header.php"); ?><h1>Kings Message</h1><div class="content">
<p>The king of Holumba, needs to talk to his allies about a new science research project being undertaken by some of his best scientists. But since its highly classified, he needs some sort of an encryption that he could use to send his messages.Can you help the king send his messages covertly such that they are not understandable ?<br />
The king's message only consists of the letters 'S' ,'L','R' and 'B'.<br />
Using the following rules encrypt his personal message .<br />
<br /><br />
LBR=B<br />
<br /><br />
LBS=R<br />
<br /><br />
LBL=S<br />
<br /><br />
SBL=R<br />
<br /><br />
SBS=B<br />
<br /><br />
RBL=B.<br />
<br /><br />
Display the original message and the final encryted message</p>

<h3>Input</h3>
<p>Inputs should be taken strictly according to constraint.</p>
<ul>
<li>Your message input shouldn't exceed 18 characters.</li>
<li>No white spaces in between.</li>
</ul>

<h3>Output</h3>
<p>Display the original message consisting of allowed characters and also display the reduced(encrypted) message. </p>

<h3>Constraints</h3>

<ul>
<li>Letters allowed : <br />S<br />L<br />R<br />B</li>
</ul>
<h3>Example</h3>
<ul>
<li>Input<br />LBRLBS<br />Output<br />BR</li>
<li>Input<br />LRSBLLBLLBLRLRSLLL<br />Output<br />LRRSSRLRSLLL</li>
</ul>
<h3>Explanation</h3>
<p>For input<br />For the input LBRLBS the message is reduced using the rules given above to BR.<br />
<br /><br />
<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aranta">aranta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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