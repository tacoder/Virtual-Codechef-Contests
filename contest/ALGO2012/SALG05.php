<?php require("../../includes/header.php"); ?><h1>Jay and Viru</h1><div class="content">

<style type="text/css">
p
{
font-size:14px;
text-align:justify;
}
</style><p>Jay and Viru want to communicate with each other in the battlefield while fighting against Gabbar. They decide to make a simple cryptographic system so that the evil Gabbar does not easily decipher what they are trying to communicate. Jay's job was to develop the encryption algorithm and Viru was to develop the decryption one. Although Jay did his job, Viru is too busy romancing with Basanti. You, being Viru's close friend have to develop the decryption algorithm for him. </p>
<h3>
The encryption is done as follows:</h3>
<p>
We shall assume that inputs letters to be encrypted consists of lowercase characters (a-z) and one or more white spaces. Also whenever we refer to the term "alphabet", we always mean English Alphabet (consisting of letters a-z). Jay's encryption algorithm uses a substitution cipher (where we replace each letter of the alphabet by some other letter of the alphabet) to encrypt. </p>
<p>Represent each letter of the alphabet by a number in this way &ndash;    a -> 0, b-> 1,..., z -> 25. If a letter is shifted by n places means that it is replaced by another letter which precedes (n &lt; 0) or succeeds (n > 0) the given letter by n places (we go back to a in case we need to go beyond z). In case of inversion, we exchange the mapping of letters in this way &ndash; the mapping of A is now the mapping of Z and vice versa, the mapping of B is now the mapping of Y and vice versa, and so on.</p>
<p>
 Initially Jay and Viru decide upon a common word (called a key) which they would use to encrypt the text (The original text is called plaintext and the encrypted text is called ciphertext). Then the entire text (including spaces - assume there will be no leading or trailing spaces) is divided into groups of size k, where k is the length of the key. Then write the key under the groups - letter by letter. Now the first floor (k/2) letters of the plaintext under each group are shifted and inverted corresponding to the letter below it. For instance if in a group the letter a is below the letter k, k will be shifted by a, i.e. 0 places and then inverted. While the remaining letters of the group are simply shifted. Note that the shifting and inversion functions are done on letters only - white space is not encrypted. Use the above stuffs to create a decrypting algorithm.
</p>
<h3>Input</h3>
<p>The first line of the input would consist a number T indicating the number of test cases. The next line contains a string which would be used as a key for each of the coming test cases. T test cases then follow. Each test case consists of a single line containing the cipher text.</p>
<h3>Output</h3>
<p>For each test case the output would consist of a single line containing the decrypted text.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre><code>1
tiger
ldusf lrmcp</code></pre><p>
<b>Output:</b></p>
<pre><code>hello world</code></pre><h3>Explanation:</h3>
<p>
Here I shall explain how &ldquo;hello world&rdquo; was encrypted to form &ldquo;ldusf lrmcp&rdquo;. The length of the key (tiger) is 5. Divide the plain text into groups of length 5 each. The first such group is &ldquo;hello&rdquo;.  &ldquo;h&rdquo; is now shifted by &ldquo;t&rdquo; places, i.e. 19 places and then inverted i.e. the letter corresponding to &ldquo;h&rdquo; now would be the letter corresponding to &ldquo;s&rdquo; (on applying inversion &ndash; make a table and see) which in this case is &ldquo;l&rdquo;. Similarly for &ldquo;e&rdquo;, it is &ldquo;d&rdquo; on shifting and inversion. The remaining three letters &ldquo;l&rdquo;, &ldquo;l&rdquo; and &ldquo;o&rdquo; are simply shifted which is easy to calculate. The output would be of a similar format to input &ndash; it would have spaces in the same location as the input.</p>
<p>The problem now asks you to build a decrypting algorithm based on the encrypting strategy described above</p>
<h3>Input Constraints</h3>
<p>T&lt;=150, size of the input cipher text &lt;= 3500 words</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pankajb64">pankajb64</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BF, C, C99 strict, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>