package com.example.agrihubandro.adapter;

import android.content.Context;
import android.graphics.drawable.Drawable;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.load.DataSource;
import com.bumptech.glide.load.engine.GlideException;
import com.bumptech.glide.request.RequestListener;
import com.bumptech.glide.request.target.Target;
import com.example.agrihubandro.R;
import com.example.agrihubandro.models.ProductModel;

import java.util.List;

public class ProductDetailTextAdapter extends RecyclerView.Adapter<ProductDetailTextAdapter.ViewHolder> {

    private List<ProductModel> mData;

    private LayoutInflater mInflater;
    private ItemClickListener mClickListener;

    // data is passed into the constructor
    public ProductDetailTextAdapter(Context context, List<ProductModel> data) {
        this.mInflater = LayoutInflater.from(context);
        this.mData = data;
    }

    // inflates the row layout from xml when needed
    @Override
    public ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View view = mInflater.inflate(R.layout.activity_product_card, parent, false);
        return new ViewHolder(view);
    }

    // binds the data to the TextView in each row
    @Override
    public void onBindViewHolder(ViewHolder holder, int position) {
        ProductModel product = mData.get(position);
        holder.pd_title.setText(product.getNama());
        holder.pd_kategori.setText(product.getKategori());
        holder.pd_description.setText(product.getDeskripsi());
        holder.pd_moq.setText(product.getMoq());
        holder.pd_sertifikasi.setText(product.getSertifikasi());
        holder.pd_vendor_name.setText(product.getVendor_name() + " " + product.getVendor_alamat());
    }

    // total number of rows
    @Override
    public int getItemCount() {
        return mData.size();
    }

    // stores and recycles views as they are scrolled off screen
    public class ViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener {
        TextView pd_title;
        TextView pd_kategori;
        TextView pd_description;
        TextView pd_moq;
        TextView pd_sertifikasi;
        TextView pd_vendor_name;
        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            pd_title = itemView.findViewById(R.id.pd_title);
            pd_kategori = itemView.findViewById(R.id.pd_kategori);
            pd_description = itemView.findViewById(R.id.pd_description);
            pd_moq = itemView.findViewById(R.id.pd_moq);
            pd_sertifikasi = itemView.findViewById(R.id.pd_sertifikasi);
            pd_vendor_name = itemView.findViewById(R.id.pd_vendorname);
        }


        @Override
        public void onClick(View view) {
            if (mClickListener != null) mClickListener.onItemClick(view, getAdapterPosition());
        }
    }

    // convenience method for getting data at click position
    public ProductModel getItem(int id) {
        return mData.get(id);
    }

    // allows clicks events to be caught
    public void setClickListener(ItemClickListener itemClickListener) {
        this.mClickListener = itemClickListener;
    }

    // parent activity will implement this method to respond to click events
    public interface ItemClickListener {
        void onItemClick(View view, int position);
    }
}


