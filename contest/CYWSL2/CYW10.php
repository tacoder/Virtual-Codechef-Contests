<?php require("../../includes/header.php"); ?><h1>Cryptography</h1><div class="content">

<p> In cryptography, a transposition cipher is a method of encryption by which the positions held by units of plaintext (which are commonly characters or groups of characters) are shifted according to a regular system, so that the ciphertext constitutes a permutation of the plaintext. That is, the order of the units is changed. Mathematically a bijective function is used on the characters' positions to encrypt and an inverse function to decrypt. WAP to perform transposition encryption on a string.  </p>
<h3>Input</h3>

<p>In a columnar transposition, the message is written out in rows of a fixed length, and then read out again column by column, and the columns are chosen in some scrambled order. Both the width of the rows and the permutation of the columns are usually defined by a keyword. For example, the word ZEBRAS is of length 6 (so the rows are of length 6), and the permutation is defined by the alphabetical order of the letters in the keyword. In this case, the order would be "6 3 2 4 1 5".<br />
In a regular columnar transposition cipher, any spare spaces are filled with nulls; in an irregular columnar transposition cipher, the spaces are left blank. Finally, the message is read off in columns, in the order specified by the keyword. For example, suppose we use the keyword ZEBRAS and the message WE ARE DISCOVERED. FLEE AT ONCE.</p>
<h3>Output Description</h3>
<p>6 3 2 4 1 5<br />
W E A R E D<br />
I S C O V E<br />
R E D F L E<br />
E A T O N C<br />
E Q K J E U </p>
<pre>
<b>Output:</b>
EVLNE ACDTK ESEAQ ROFOJ DEECU WIREE


</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arnavch">arnavch</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>